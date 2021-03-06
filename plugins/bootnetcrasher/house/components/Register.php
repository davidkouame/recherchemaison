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
use Input;
use Mail;

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
        /*$user = Auth::getUser();
        if($user){
            $this->page['view'] = "first_step";
        }
        // Chargement des localisations
        $this->page['localisations'] = LocalisationModel::all();*/
    }

    public function onCreateAgence(){
        $user = Auth::getUser();
        $agencemodel = new AgenceModel;
        $agencemodel->libelle = post('libelle');
        $agencemodel->email = $user->email;
        $agencemodel->tel = $user->tel;
        $agencemodel->agrement = Input::file('agrement');
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
        \Flash::success("Bienvenue à ChapMaison, votre compte agence a été crée avec succèss !");
        // Send email
        Mail::send('Demarcheur::create', [], function($message){
            $message->to("bootnetcrasher@gmail.com", 'Admin');
            $message->subject('Recherche de maison');
        });
        return true;
    }

    public function onCreateDemarcheur(){
        $user = Auth::getUser();
        $demarcheur = new DemarcheurModel;
        $demarcheur->email = $user->email;
        $demarcheur->piece = Input::file('piece');
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
        \Flash::success('Bienvenue à ChapMaison, votre compte démarcheur a été crée avec succèss !');
        // Send email
        Mail::send('Demarcheur::create', [], function($message){
            $message->to("bootnetcrasher@gmail.com", 'Admin');
            $message->subject('Recherche de maison');
        });
        return true;
    }

    public function onCreateUserFirstStep(){
        
        $rules = [
            "type_user" => "required",
            // "nom" => "required",
            // "email" => "required|unique:users",
            // "prenom" => "required",
            "tel" => "required|max:8|min:8|unique:users|digits:8",
            'password' => 'required|between:8,255|confirmed'
        ];
        $messages =[
            "type_user.required" => "Le type d'utilisateur est requis",
            "tel.required" => "Le téléphone est requis",
            "tel.min" => "Le téléphone doit être de 8 caractères (Exemple: 67988990)",
            "tel.max" => "Le téléphone doit être de 8 caractères (Exemple: 67988990)",
            "tel.digits" => "Le téléphone doit être numérique",
            // "nom.required" => "Le nom est requis",
            // "email.required" => "L'email est requis",
            // "email.unique" => "L'email doit être unique",
            // "prenom.required" => "Le prénom est requis",
            /*"tel" => [
                "required" => "Le téléphone est requis",
                "max" => "Le téléphone doit être de 8 caractères (Exemple: 67988990)",
                "min" => "Le téléphone doit être de 8 caractères (Exemple: 67988990)"
            ],*/
            "password.required" => "Le password est requis",
            "password.between" => "Le password doit être supérieur à 8 caractères"
        ];
        $validation = Validator::make(post(), $rules, $messages);
        if ($validation->fails()) {
            throw new ValidationException($validation);
        }

        // creation d'un compte user
        $this->onRegister();
        $user = Auth::getUser();
        // $user->name = post('nom');
        // $user->surname = post('prenom');
        $user->tel = post('tel');
        // $user->email = post('email');
        $user->save();

        // Mise à jour du type de l'utilisateur
        if(post('type_user') && post('type_user') == 1){
            $demarcheur = new DemarcheurModel;
            // $demarcheur->email = $user->email;
            // $demarcheur->piece = Input::file('piece');
            $demarcheur->tel = $user->tel;
            // $demarcheur->tel2 = post('tel2');
            // $demarcheur->nom = $user->name;
            // $demarcheur->prenom = $user->surname;
            $demarcheur->save();
            $user->demarcheur_id = $demarcheur->id;
            $user->save();
        }

        if(post('type_user') && post('type_user') == 2){
            $user = Auth::getUser();
            $agencemodel = new AgenceModel;
            // $agencemodel->libelle = post('libelle');
            // $agencemodel->email = $user->email;
            $agencemodel->tel = $user->tel;
            // $agencemodel->agrement = Input::file('agrement');
            // $agencemodel->tel2 = post('tel2');
            // $agencemodel->nom = $user->name;
            // $agencemodel->prenom = $user->surname;
            // $agencemodel->email_agence = post('email_agence');
            $agencemodel->save();
            if($user){
                $user->agence_id = $agencemodel->id;
                $user->save();
            }
        }
        \Flash::success("Votre compte a été crée avec succès !");
        return \Redirect::to('/');
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
            $validation = Validator::make(post(), $rules);
            if ($validation->fails()) {
                throw new ValidationException($validation);
            }
            if(!Input::file('agrement')){
                throw new ValidationException(["error" => "Veillez uploader votre agrément !.", 'message' => 'bdsqvgdvqsg']);
            }
            if($this->onCreateAgence()){
                // return \Redirect::to('auth/login');
                $user = Auth::getUser();
                if($user){
                    $user->is_activated = 0;
                    $user->activated_at = null;
                    \Auth::logout();
                }
                return \Redirect::to('sucessful-register');
            }
        }else{
            $rules = [
                "localisation_id" => "required"
            ];
            $validation = Validator::make(post(), $rules);
            if ($validation->fails()) {
                throw new ValidationException($validation);
            }
            if(!Input::file('piece')){
                throw new ValidationException(["error" => "Veillez uploader une pièce d'identité .", 'message' => 'bdsqvgdvqsg']);
            }
            if($this->onCreateDemarcheur()){
                // return \Redirect::to('auth/login');
                $user = Auth::getUser();
                if($user){
                    $user->is_activated = 0;
                    $user->activated_at = null;
                    \Auth::logout();
                }
                return \Redirect::to('sucessful-register');
            }
        }
    }
}
