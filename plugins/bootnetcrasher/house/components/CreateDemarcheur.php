<?php

namespace bootnetcrasher\House\Components;

use Cms\Classes\ComponentBase;
use DB;
use Flash;
use Redirect;
use Validator;
use ValidationException;
use Auth;
use bootnetcrasher\House\Models\DemarcheurModel;
use RainLab\User\Components\Account;

class CreateDemarcheur extends Account {

    public function componentDetails() {
        return [
            'name' => 'Create démarcheur',
            'description' => 'Create démarcheur'
        ];
    }

    public function onStart() {
    }

    public function onRun() {
    }

    public function onCreateDemarcheur(){
        // creation d'un compte user
        $this->onRegister();
        $demarcheur = new DemarcheurModel;
        $demarcheur->email = post('email');
        $demarcheur->tel = post('tel1');
        $demarcheur->tel2 = post('tel2');
        $demarcheur->nom = post('nom');
        $demarcheur->prenom = post('prenom');
        $demarcheur->save();
        $user = $this->user();
        if($user){
            $user->demarcheur_id = $demarcheur->id;
            $user->save();
        }
        \Flash::success('Le démarcheur a été enregistré avec succèss !');
        return \Redirect::to('demarcheur/login');
    }
}
