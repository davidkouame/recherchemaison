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

class CreateAgence extends Account {

    public function componentDetails() {
        return [
            'name' => 'Create Agence',
            'description' => 'Create Agence'
        ];
    }

    public function onStart() {
    }

    public function onRun() {
    }

    public function onCreateAgence(){
        // creation d'un compte user
        $this->onRegister();
        $agencemodel = new AgenceModel;
        $agencemodel->libelle = post('libelle');
        $agencemodel->email = post('email');
        $agencemodel->tel = post('tel1');
        $agencemodel->tel2 = post('tel2');
        $agencemodel->nom = post('nom');
        $agencemodel->prenom = post('prenom');
        $agencemodel->email_agence = post('email_agence');
        $agencemodel->save();
        $user = $this->user();
        if($user){
            $user->agence_id = $agencemodel->id;
            $user->save();
        }
        \Flash::success('Lagence a été enregistré avec succèss !');
        return \Redirect::to('agence/login');
    }
}
