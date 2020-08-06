<?php

namespace bootnetcrasher\House\Components;

use Flash;
use Redirect;
use Validator;
use ValidationException;
use Auth;
use bootnetcrasher\House\Models\AgenceModel;
use bootnetcrasher\House\Models\DemarcheurModel;
use bootnetcrasher\House\Models\PublicationModel;
use RainLab\User\Components\Account;
use BackendAuth;
use RainLab\User\Models\User;
use Event;
use Request;

class Publications extends Account {

    public function componentDetails() {
        return [
            'name' => 'Publications',
            'description' => 'Publications'
        ];
    }

    public function onStart() {
    }

    public function onRun() {
        // On vérifie si nous avons un param succes-delete en get 
        if(get('success-delete') == 1){
            \Flash::success('Votre publication a été supprimé avec succèss !');
            return Redirect::to('demarcheur/publications');
        }
        // On vérifie si nous avons un param succes-publisher en get 
        if(get('success-publisher') == 1){
            dd("gdg");
            \Flash::success('Votre publication a été pris en compte !');
            return Redirect::to('demarcheur/publications');
        }
        if(get('success-publisher') == 2){
            \Flash::success('Votre publication a été retirée avec succès !');
            return Redirect::to('demarcheur/publications');
        }
        $this->prepareVars();
        if(!$this->user()){
            return Redirect::to('auth/login');
        }
        $this->prepareVars();
        $this->page['view'] = $this->getView();
        // recuperation de l'agence
        $user = Auth::getUser();
        // chargement des publications
        $this->loadPublications();
        if($this->page['view'] == 'detail'){
            // recuperation du detail de publication
            $this->page['publication'] = $publication = PublicationModel::find($this->param('publication_id'));
            // dd($publication->photos);
            if($publication->agence_id)
                $this->page['modelUser'] = 'agence';
            else
                $this->page['modelUser'] = 'demarcheur';
        }
    }

    public function getView(){
        if($this->param('publication_id'))
            return "detail";
        else
            return "list";
    }

    // chargement des publications de l'utilisateur
    public function loadPublications(){
        $user = Auth::getUser();
        if($user->agence_id){
            $agence = AgenceModel::find($user->agence_id);
            // recuperation de toutes les publications
            $this->page['publications'] = $publications = PublicationModel::where('agence_id', $agence->id)->orderBy('created_at', 'desc')->get();
            $this->page['modelUser'] = 'agence';
        }else{
            $demarcheur = DemarcheurModel::find($user->demarcheur_id);
            // Recuperation du statut de la publication 
            $statutPublication = get("statut_publication");
            if($statutPublication && $statutPublication != "all"){
                // recuperation de toutes les publications
                $this->page['publications'] = $publications = PublicationModel::where('demarcheur_id', $demarcheur->id)
                ->where('statut_publication', '=', $this->getIdStatutPublication($statutPublication))
                ->orderBy('created_at', 'desc')->get();
            }else{
               // recuperation de toutes les publications
               $this->page['publications'] = $publications = PublicationModel::where('demarcheur_id', $demarcheur->id)
               ->orderBy('created_at', 'desc')->get(); 
            }
            $this->page['modelUser'] = 'demarcheur';
            $this->page['statutPublication'] = $statutPublication;
        }
    }

    // Recuperation de l'id du statut
    public function getIdStatutPublication($letter){
        if($letter == "en"){
            return 1;
        }else if($letter == "acc"){
            return 2;
        }else{
            return 3;
        }
    }
}
