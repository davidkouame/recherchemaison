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

class AccountDemarcheur extends Account {

    public function componentDetails() {
        return [
            'name' => 'Account démarcheur',
            'description' => 'Account démarcheur'
        ];
    }

    public function onStart() {
    }

    public function onRun() {
        $this->prepareVars();
        // recuperation du démarcheur
        $user = Auth::getUser();
        if($user){
            $this->page['demarcheur'] = $demarcheur = DemarcheurModel::find($user->demarcheur_id);
        }else{
            return Redirect::to('auth/login');
        }
    }

    public function onUpdateDemarcheur(){
        // mise à jour du password de user
        $this->onUpdate();
        // recuperation du démarcheur
        $user = Auth::getUser();
        $demarcheurmodel = DemarcheurModel::find($user->demarcheur_id);
        if($demarcheurmodel){
            $demarcheurmodel->tel = post('tel1');
            $demarcheurmodel->tel2 = post('tel2');
            $demarcheurmodel->nom = post('nom');
            $demarcheurmodel->prenom = post('prenom');
            $demarcheurmodel->save();
            \Flash::success('Le démarcheur a été modifié avec succèss !');
            return \Redirect::to('demarcheur/account');
        }
    }
}
