<?php namespace bootnetcrasher\House\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use bootnetcrasher\House\Models\DemarcheurModel;

class DemarcheurRefuse extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('bootnetcrasher.House', 'demarcheurs', 'demarcheursrefuses');
    }

    public function listExtendQuery($query) {
        $query->whereHas('user', function($query){
            $query->where('is_activated', -1);
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
}
