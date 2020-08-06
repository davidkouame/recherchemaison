<?php namespace RainLab\User\Components;

use Flash;
use Redirect;
use Validator;
use ValidationException;
use Auth;
use BackendAuth;
use RainLab\User\Models\User;
use Event;
use Request;
use RainLab\User\Models\Throttle;
use Illuminate\Support\Facades\Hash;

class Login extends Account {

    public function componentDetails() {
        return [
            'name' => 'Login',
            'description' => 'Login'
        ];
    }

    public function onStart() {
    }

    public function onRun() {
        $user = Auth::getUser();
        if($user){
            return \Redirect::to('/');
        }
    }

    public function onSignin(){
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
                        // ->whereNotNull('agence_id')
                        ->first();
            if(!$user){
                $user = User::where('tel', '=', $data['email'])
                        ->first();
            }
            if(!$user){
                trace_log("L'email ou le password est invalide ");
                Flash::error("Désolé , les données que vous utilisez sont invalides !");
                return Redirect::back()->withInput(Request::except('password'));
            }

            $throttle = Throttle::where('user_id', $user->id)->first();
            if($throttle)
                $throttle->delete();
            /*$throttle = Throttle::where('user_id', $user->id)->first();
            if($throttle){
                trace_log("Le user a été bloqué ");
                Flash::error("Désolé , les données que vous utilisez sont invalides !");
                return Redirect::back()->withInput(Request::except('password'));
            }*/

            if($user->is_activated != 1){
                trace_log("Le user n'est pas actif ");
                Flash::error("Désolé, votre compte n'a pas été encore activé !");
                return Redirect::back()->withInput(Request::except('password'));
            }
            
            
            // $agence = $demarcheur = null;
            $redirect = null;
            if($user->agence_id){
                //recupération du compte agence
                // $agence = AgenceModel::where('id', '=', $user->agence_id)->first();
                $redirect = "/";
            }else{
                //recupération du compte demarcheur
                // $demarcheur = DemarcheurModel::where('id', '=', $user->demarcheur_id)->first();
                $redirect = "/";
            }
            
            Event::fire('rainlab.user.beforeAuthenticate', [$this, $credentials]);
            if(Hash::check($credentials['password'], $user->password)){
                $user = Auth::login($user);
                return Redirect::to($redirect);
            }else{
                trace_log("Désolé, votre compte n'a pas été encore activé !");
                Flash::error("Désolé, votre compte n'a pas été encore activé !");
                return Redirect::back()->withInput(Request::except('password'));
            }
          } catch (Exception $e) {
              Flash::error("Désolé , les données que vous utilisez sont invalides !");
              trace_log("une erreur est survenue lors de l'authentification du compte cabinet, message=>".$e->getMessage());
          }
    }
}
