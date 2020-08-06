<?php

namespace bootnetcrasher\House\Components;

use Flash;
use Redirect;
use Validator;
use ValidationException;
use Auth;
use bootnetcrasher\House\Models\AgenceModel;
use bootnetcrasher\House\Models\DemarcheurModel;
use bootnetcrasher\House\Models\PublicationModel;
use RainLab\User\Components\Account;
use BackendAuth;
use RainLab\User\Models\User;
use Event;
use Request;
use Mail;

class DetailPublication extends Account {

    public function componentDetails() {
        return [
            'name' => 'Détail publication',
            'description' => 'Détail publication'
        ];
    }

    public function onStart() {
    }

    public function onRun() {
        $this->prepareVars();
        $publication_key = $this->param('publication_slot');
        // recherche de la publication
        $this->page['publication'] = $publication = PublicationModel::with(array('communes', 
        'villes', 'localisations', 'typepublication', 'agence', 'demarcheur'))
        ->where('slot', $publication_key)->first();
        $this->page['publications'] = $this->recherchePublicationSimilaire($publication);
        /*$this->page['publications'] = PublicationModel::with('typepublication')->where('id', '<>', $publication->id)
        ->take(3)->get();*/
    }

    public function onSendMessage(){
        // recuperation de la publication
        $publication = PublicationModel::find(post('publication_id'));
        try{
            $email = $this->getUserPublication($publication);
            $body = post('message');
            $name = post('name');
            $emailUser = post('email');
            $tel = post('phoneNumber');
            $vars = ["body" => $body, "tel" => $tel, "email" => $emailUser, "name" => $name];
            Mail::send('bootnetcrasher.sendmessage::sendmessage', $vars, function($message) use($email){
                $message->to($email, 'Admin');
                $message->subject('Recherche de maison');
            });
        }catch(\Exception $ex){
            trace_log($ex->getMessage());
        }
        \Flash::success('Votre mail a été envoyé avec succèss !');
        return Redirect::to("publications/".$publication->slot);
    }

    //Get email user publication
    public function getUserPublication($publication){
        $email = null;
        if($publication->agence_id){
            $email = $publication->agence->email;
        }else{
            $email = $publication->demarcheur->email;
        }
        return $email;
    }

    // Recherche des maisons similaires à la maison
    private function recherchePublicationSimilaire($publication){
        $data = [];
        $publications = PublicationModel::where('commune_id', $publication->commune_id)
        ->where('id', '<>', $publication->id)
        ->whereNull('expired_at')
        ->whereNotNull('published_at')
        ->get();
        foreach($publications as $element){ $data[] = $element;}
        try{
            if(count($data) < 3){
                $prixmin = $publication->prix - 20000;
                $prixmax = $publication->prix + 20000;
                $publications = PublicationModel::whereBetween('prix', array($prixmin, $prixmax))
                ->where('id', '<>', $publication->id)
                ->whereNull('expired_at')
                ->whereNotNull('published_at')
                ->get();
                foreach($publications as $publication){ $data[] = $publication;}
            }
        }catch(\Exception $e){
            trace_log("Une erreur est survenue lors de la recuperation des publications similaires ");
        }
        return $data;
    }
}
