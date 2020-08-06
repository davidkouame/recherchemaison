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
use Input;

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
        // recuperation de l'utilsateur
        $user = Auth::getUser();
        $rules = [
            "nom" => "required",
            // "email" => "required|unique:users",
            "prenom" => "required",
        ];

        $messages =[
            "nom.required" => "Le nom est requis",
            "email.required" => "L'email est requis",
            "email.unique" => "L'email doit être unique",
            "prenom.required" => "Le prénom est requis",
        ];

        if(!$user->email){
            $rules["email"] = "required|unique:users";
        }

        $validation = Validator::make(post(), $rules, $messages);
        if ($validation->fails()) {
            throw new ValidationException($validation);
        }

        if(!Input::file('piece')){
            throw new ValidationException(["error" => "Veillez uploader une pièce d'identité !.", 'message' => 'bdsqvgdvqsg']);
        }

        // mise à jour du password de user
        $this->onUpdate();
        // recuperation du démarcheur
        
        $user->name = post('nom');
        $user->surname = post('prenom');
        $user->save();
        $demarcheurmodel = DemarcheurModel::find($user->demarcheur_id);
        if($demarcheurmodel){
            if(post('tel1')){
                $demarcheurmodel->tel = post('tel1');
            }
            if(post('tel2')){
                $demarcheurmodel->tel2 = post('tel2');
            }
            $demarcheurmodel->nom = post('nom');
            $demarcheurmodel->prenom = post('prenom');
            $demarcheurmodel->piece = Input::file('piece');
            $demarcheurmodel->save();
            // \Flash::success('Le compte démarcheur a été modifié avec succèss !');
            return \Redirect::to('demarcheur/account');
        }
    }
}
