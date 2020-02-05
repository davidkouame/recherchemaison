<?php

namespace bootnetcrasher\House\Components;

use Cms\Classes\ComponentBase;
use DB;
use Flash;
use Redirect;
use Validator;
use ValidationException;
use Auth;
use bootnetcrasher\House\Models\PublicationModel;
use bootnetcrasher\Parametre\Models\VilleModel;
use bootnetcrasher\Parametre\Models\CommuneModel;
use bootnetcrasher\Parametre\Models\LocalisationModel;
use bootnetcrasher\House\Models\AgenceModel;
use bootnetcrasher\House\Models\DemarcheurModel;
use RainLab\User\Components\Account;
use Input;
use System\Models\File;

class CreatePublicationMaison extends  Account{

    public function componentDetails() {
        return [
            'name' => 'Create publication maison',
            'description' => 'Create publication maison'
        ];
    }

    public function onStart() {
    }

    public function onRun() {
        $this->prepareVars();
        if(!$this->user()){
            return Redirect::to('auth/login');
        }
        // recuperation de toutes les villes 
        $this->page['villes'] = $villes = VilleModel::all();
        $this->page['communes'] = $communes = CommuneModel::all();
        $this->page['localisations'] = $localisations = LocalisationModel::all();
    }

    // Publication d'une annone 
    public function onCreatePublicationMaison(){
        $publication = new PublicationModel;
        $publication->commune_id = post('commune_id');
        $publication->ville_id = post('ville_id');
        $publication->localisation_id = post('localisation_id');
        $publication->libelle = post('libelle');
        $publication->nbre_piece = post('nbre_piece');
        $publication->published_at = now();
        $publication->cover = Input::file('cover');
        /*foreach(Input::file('fileUpload') as $photo){
            $publication->photos[] = $photo;
        }*/
        $publication->photos = Input::file('fileUpload');
        $user = Auth::getUser(); 
        if($user){
            if($user->agence_id){
                $agence = AgenceModel::find($user->agence_id);
                $publication->agence_id = $agence->id;
            }else{
                $demarcheur = DemarcheurModel::find($user->demarcheur_id);
                $publication->demarcheur_id = $demarcheur->id;
            }
        }
        $publication->save();
        Flash::success('La publication a été enregistré avec succèss !');
        // return Redirect::to('agence/create-publication');
        return Redirect::to($this->redirect());
    }

    public function redirect(){
        $user = Auth::getUser(); 
        if($user and $user->agence_id)
            return 'agence/create-publication';
        else
            return 'demarcheur/create-publication';
    }

    public function onImageUpload() {
        $image = Input::all();

        $file = (new File())->fromPost($image['cover']);

        return[
            '#imageResult' => '<img src="' . $file->getThumb(100, 100, ['mode' => 'crop']) . '" >'
        ];
    }
}
