<?php

namespace bootnetcrasher\House\Components;

use Flash;
use Redirect;
use Validator;
use ValidationException;
use Auth;
use RainLab\User\Components\Account;
use BackendAuth;
use bootnetcrasher\House\Models\PublicationModel;
use bootnetcrasher\Parametre\Models\LocalisationModel;
use Input;
use Bootnetcrasher\Parametre\Models\TypePublicationModel;

class Home extends Account {

    public function componentDetails() {
        return [
            'name' => 'Home',
            'description' => 'Home'
        ];
    }

    public function onRun() {
        if(!$this->isRightUser()){
            if($this->getUrlStep() != "auth/login")
                return \Redirect::to($this->getUrlStep());
        }
        $this->prepareVars();
        // recuperation de toutes les localisations
<<<<<<< HEAD
        $this->page['localisations'] = LocalisationModel::orderBy('commune_id','asc')->orderBy('libelle','asc')->get();
=======
        $this->page['localisations'] = LocalisationModel::orderBy('libelle','asc')->get();
        // Recuperation de tous les types de publications
        $this->page['typepublications'] = TypePublicationModel::orderBy('libelle','asc')->get();
>>>>>>> 38b234bf833040b4605a23ef3a7774c1d5208395
        // recuperation de toutes les publications
        $query = PublicationModel::with('typepublication')->whereNotNull('published_at');
        if(Input::get('keys')){
            $query->where('libelle', 'like', '%'.Input::get('keys').'%');
        }
        if(Input::get('localisation_id')){
            $query->where('localisation_id', Input::get('localisation_id'));
        }
        if(Input::get('typepublication_id')){
            $query->where('type_publication_id', Input::get('typepublication_id'));
        }
        $this->page['publications'] = $query->orderBy('created_at', 'desc')->paginate(12);
        $this->page['keys'] = Input::get('keys');
        $this->page['localisation_id'] = Input::get('localisation_id');
        $this->page['typepublication_id'] = Input::get('typepublication_id');
        $user = \Auth::getUser();
    }
}
