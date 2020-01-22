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
            $this->page['publications'] = $publications = PublicationModel::where('agence_id', $agence->id)->get();
            $this->page['modelUser'] = 'agence';
        }else{
            $demarcheur = DemarcheurModel::find($user->demarcheur_id);
            // recuperation de toutes les publications
            $this->page['publications'] = $publications = PublicationModel::where('demarcheur_id', $demarcheur->id)->get();
            $this->page['modelUser'] = 'demarcheur';
        }
    }
}
