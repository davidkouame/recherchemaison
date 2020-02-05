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

class DetailPublication extends Account {

    public function componentDetails() {
        return [
            'name' => 'Détail publication',
            'description' => 'Détail publication'
        ];
    }

    public function onStart() {
    }

    public function onRun() {
        $this->prepareVars();
        $publication_key = $this->param('publication_slot');
        // recherche de la publication
        $this->page['publication'] = PublicationModel::with(array('communes', 
        'villes', 'localisations', 'typepublication', 'agence', 'demarcheur'))
        ->where('slot', $publication_key)->first();
        // dd($this->page['publication']->photos);
    }
}
