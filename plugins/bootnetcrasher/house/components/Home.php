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
        $this->page['localisations'] = LocalisationModel::orderBy('libelle','asc')->get();
        // recuperation de toutes les publications
        $query = PublicationModel::with('typepublication')->whereNotNull('published_at');
        if(Input::get('keys')){
            $query->where('libelle', 'like', '%'.Input::get('keys').'%');
        }
        if(Input::get('localisation_id')){
            $query->where('localisation_id', Input::get('localisation_id'));
        }
        $this->page['publications'] = $query->orderBy('created_at', 'desc')->paginate(12);
        $this->page['keys'] = Input::get('keys');
        $this->page['localisation_id'] = Input::get('localisation_id');
        $user = \Auth::getUser();
    }
}
