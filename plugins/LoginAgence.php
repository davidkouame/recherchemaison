<?php

namespace bootnetcrasher\House\Components;

use Flash;
use Redirect;
use Validator;
use ValidationException;
use Auth;
use bootnetcrasher\House\Models\AgenceModel;
use RainLab\User\Components\Account;
use BackendAuth;
use RainLab\User\Models\User;
use Event;
use Request;

class LoginAgence extends Account {

    public function componentDetails() {
        return [
            'name' => 'Login Agence',
            'description' => 'Login Agence'
        ];
    }

    public function onStart() {
    }

    public function onRun() {
    }

    public function onSigninAgence(){
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
                        ->whereNotNull('agence_id')
                        ->first();
            if(!$user){
                Flash::error("L'email ou le mot de passe invalide");
                return Redirect::back()->withInput(Request::except('password'));
            }
    
            //recupération du compte agence
            $agence = AgenceModel::where('id', '=', $user->agence_id)->first();
    
            Event::fire('rainlab.user.beforeAuthenticate', [$this, $credentials]);
            $user = Auth::authenticate($credentials, true);
            return Redirect::to('/agence');
          } catch (Exception $e) {
              Flash::error("L'email ou le mot de passe invalide");
              trace_log("une erreur est survenue lors de l'authentification du compte cabinet, message=>".$e->getMessage());
          }
    }
}
