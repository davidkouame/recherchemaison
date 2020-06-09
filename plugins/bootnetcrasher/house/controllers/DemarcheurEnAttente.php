<?php namespace bootnetcrasher\House\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use bootnetcrasher\House\Models\DemarcheurModel;
use Mail;
use Flash;

require_once(__DIR__ . './../../sms/plugin/Sms4all-php/autoload.php');

class DemarcheurEnAttente extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('bootnetcrasher.House', 'demarcheurs', 'demarcheursenattentes');
    }

    public function listExtendQuery($query) {
        $query->whereHas('user', function($query){
            $query->where('is_activated', 0);
        })->orderBy('created_at','desc');
    }

    public function onActivated(){
        foreach(post('checked') as $demarcheurId){
            $demarcheur = DemarcheurModel::where('id', $demarcheurId)->first();
            if($demarcheur){
                $user = $demarcheur->user;
                $user->is_activated = 1;
                $user->activated_at = now();
                $user->save();

                // Send email 
                $name = $demarcheur->nom.' '.$demarcheur->prenom;
                $vars = ["name" => $name];
                $email = $demarcheur->email;
                Mail::send('Activation::user', $vars, function($message) use($email){
                    $message->to($email, 'Support');
                    $message->subject('Activation de compte Chapmaison');
                });
                
                // Send Sms
                $message = "Bonjour M. ".$name.", votre compte Chapmaison a été activé. Vous pouvez publier vos annonces à partir de ce lien http://chapmaison.com/auth/login. Merci pour votre patience. Contacts Email : support@chapmaison.com Tel : +225 4788 6905 ";
                $tel = null;
                if(strlen($demarcheur->tel) <= 8){
                    $tel = "225".$demarcheur->tel;
                }
                $api_client = new \Sms4all\ApiClient();
                $sendsms_api = new \Sms4all\Api\SendsmsApi($api_client);
                $sendsms_api->sendSms("43WY45AM85", $message, "Chapmaison", $tel);
            }
        }
        if(count(post("checked")) > 1){
            \Flash::success("Les comptes démarcheurs ont été activé avec success !");
        }else if(count(post("checked")) == 1){
            \Flash::success("Le compte démarcheur a été activé avec success !");
        }else{
            \Flash::error("Veillez sélectionner un démarcheur !");
        }
        return $this->listRefresh();
    }

    public function onRefused(){
        foreach(post('checked') as $demarcheurId){
            $demarcheur = DemarcheurModel::where('id', $demarcheurId)->first();
            if($demarcheur){
                $user = $demarcheur->user;
                $user->is_activated = -1;
                $user->activated_at = null;
                $user->save();
            }
        }
        if(count(post("checked")) > 1){
            \Flash::success("Les comptes démarcheurs ont été refusé avec success !");
        }else if(count(post("checked")) == 1){
            \Flash::success("Le compte démarcheur a été refusé avec success !");
        }else{
            \Flash::error("Veillez sélectionner un démarcheur !");
        }
        return $this->listRefresh();
    }
}
