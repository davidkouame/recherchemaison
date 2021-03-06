<?php

namespace bootnetcrasher\House\Components;

use Cms\Classes\ComponentBase;
use DB;
use Flash;
use Redirect;
use Validator;
use ValidationException;
use Auth;
use bootnetcrasher\House\Models\AgenceModel;
use RainLab\User\Components\Account;

class AccountAgence extends Account {

    public function componentDetails() {
        return [
            'name' => 'Account Agence',
            'description' => 'Account Agence'
        ];
    }

    public function onStart() {
    }

    public function onRun() {
        $this->prepareVars();
        // recuperation de l'agence
        $user = Auth::getUser();
        if($user){
            $this->page['agence'] = $agence = AgenceModel::find($user->agence_id);
        }else{
            return Redirect::to('auth/login');
        }
    }

    public function onUpdateAgence(){
        // mise à jour du password de user
        $this->onUpdate();
        // recuperation de l'agence
        $user = Auth::getUser();
        $agencemodel = AgenceModel::find($user->agence_id);
        if($agencemodel){
            $agencemodel->libelle = post('libelle');
            $agencemodel->tel = post('tel1');
            if(post('tel2')){
                $demarcheurmodel->tel2 = post('tel2');
            }
            $agencemodel->nom = post('nom');
            $agencemodel->prenom = post('prenom');
            $agencemodel->email_agence = post('email_agence');
            $agencemodel->save();
            \Flash::success('L\'agence a été modifié avec succèss !');
            return \Redirect::to('agence/account');
        }
    }
}
