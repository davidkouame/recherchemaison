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
        $this->page['localisations'] = LocalisationModel::orderBy('commune_id','asc')->orderBy('libelle','asc')->get();
        // Recuperation de tous les types de publications
        $this->page['typepublications'] = TypePublicationModel::orderBy('libelle','asc')->get();
        // recuperation de toutes les publications
        // 2020-01-08 00:00:00


        $date = new \DateTime(date("Y-m-d H:m:s"));
        $date->modify('-30 day');
        $tomorrowDATE = $date->format('Y-m-d H:m:s');
        // dd($tomorrowDATE);
        $query = PublicationModel::with('typepublication')->where('published_at', '>', $tomorrowDATE)->get();

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
