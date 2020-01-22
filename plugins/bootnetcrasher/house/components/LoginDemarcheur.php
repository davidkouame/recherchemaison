<?php

namespace bootnetcrasher\House\Components;

use Flash;
use Redirect;
use Validator;
use ValidationException;
use Auth;
use bootnetcrasher\House\Models\DemarcheurModel;
use RainLab\User\Components\Account;
use BackendAuth;
use RainLab\User\Models\User;
use Event;
use Request;

class LoginDemarcheur extends Account {

    public function componentDetails() {
        return [
            'name' => 'Login Demarcheur',
            'description' => 'Login Demarcheur'
        ];
    }

    public function onStart() {
    }

    public function onRun() {
    }

    public function onSigninDemarcheur(){
        try{
            //on vérifie si l'utilisateur connecté est utilisateur backend
            if(BackendAuth::check()){
              Auth::logout();
              Flash::error("Déconnectez vous de votre compte admin s'il vous plaît");
            }
            //recupération des données postées
            $data = post();
            $credentials = [
                'login'    => array_get($data, 'email'),
                'password' => array_get($data, 'password')
            ];
            //on verifie si l'email est dans la base et que celui est rattaché a un compte agence
            $user = User::where('email', '=', $data['email'])
                        ->whereNotNull('demarcheur_id')
                        ->first();
            if(!$user){
                Flash::error("L'email ou le mot de passe invalide");
                return Redirect::back()->withInput(Request::except('password'));
            }
    
            //recupération du compte demarcheur
            $agence = DemarcheurModel::where('id', '=', $user->demarcheur_id)->first();
    
            Event::fire('rainlab.user.beforeAuthenticate', [$this, $credentials]);
            $user = Auth::authenticate($credentials, true);
            return Redirect::to('/demarcheur');
          } catch (Exception $e) {
              Flash::error("L'email ou le mot de passe invalide");
              trace_log("une erreur est survenue lors de l'authentification du compte cabinet, message=>".$e->getMessage());
          }
    }
}
