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
use bootnetcrasher\House\Models\DemarcheurModel;
use RainLab\User\Components\Account;
use bootnetcrasher\Parametre\Models\LocalisationModel;

class Register extends Account {

    public function componentDetails() {
        return [
            'name' => 'Register',
            'description' => 'Register'
        ];
    }

    public function onStart() {
    }

    public function onRun() {
        /*dd($this->page->url);
        if(!$this->isRightUser()){
            dd($this->getUrlStep());
            return \Redirect::to($this->getUrlStep());
        }
        dd($this->isRightUser());*/
        $user = Auth::getUser();
        if($user){
            $this->page['view'] = "first_step";
        }
        // Chargement des localisations
        $this->page['localisations'] = LocalisationModel::all();
    }

    public function onCreateAgence(){
        $user = Auth::getUser();
        $agencemodel = new AgenceModel;
        $agencemodel->libelle = post('libelle');
        $agencemodel->email = $user->email;
        $agencemodel->tel = $user->tel;
        // $agencemodel->tel2 = post('tel2');
        $agencemodel->nom = $user->name;
        $agencemodel->prenom = $user->surname;
        $agencemodel->email_agence = post('email_agence');
        $agencemodel->save();
        $user = $this->user();
        if($user){
            $user->agence_id = $agencemodel->id;
            $user->save();
        }
        \Flash::success('Lagence a été enregistré avec succèss !');
        return true;
    }

    public function onCreateDemarcheur(){
        $user = Auth::getUser();
        $demarcheur = new DemarcheurModel;
        $demarcheur->email = $user->email;
        $demarcheur->tel = $user->tel;
        // $demarcheur->tel2 = post('tel2');
        $demarcheur->nom = $user->name;
        $demarcheur->prenom = $user->surname;
        $demarcheur->save();
        $user = $this->user();
        if($user){
            $user->demarcheur_id = $demarcheur->id;
            $user->save();
        }
        \Flash::success('Le démarcheur a été enregistré avec succèss !');
        return true;
    }

    public function onCreateUserFirstStep(){
        
        $rules = [
            "nom" => "required",
            "prenom" => "required",
            "tel1" => "required",
            'password' => 'required|between:8,255|confirmed'
        ];
        $messages =[
            "nom.required" => "Le nom est requis",
            "prenom.required" => "Le prénom est requis",
            "tel1.required" => "Le téléphone est requis",
            "password" => [
                "required" => "Le password est requis",
                "between" => "Le password doit être supérieur à 8 caractères"
            ]
            
        ];
        $validation = Validator::make(post(), $rules, $messages);
        if ($validation->fails()) {
            throw new ValidationException($validation);
        }
        // creation d'un compte user
        $this->onRegister();
        $user = Auth::getUser();
        $user->name = post('nom');
        $user->surname = post('prenom');
        $user->tel = post('tel1');
        $user->save();
        \Flash::success("L'utilisateur a été enregistré avec succèss !");
        return \Redirect::to('first-step');
    }

    public function onCreateUserTwoStep(){
        if(post('typeuser') == 1){
            $rules = [
                "libelle" => "required",
                "email_agence" => "required",
                "localisation_agence_id" => "required",
            ];
            $validation = Validator::make(post(), $rules);
            if ($validation->fails()) {
                throw new ValidationException($validation);
            }
            if($this->onCreateAgence());
                return \Redirect::to('auth/login');
        }else{
            $rules = [
                "localisation_id" => "required"
            ];
            $validation = Validator::make(post(), $rules);
            if ($validation->fails()) {
                throw new ValidationException($validation);
            }
            if($this->onCreateDemarcheur())
                return \Redirect::to('auth/login'); 
        }
    }
}
