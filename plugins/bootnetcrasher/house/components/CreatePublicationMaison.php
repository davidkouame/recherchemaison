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
use October\Rain\Exception\ApplicationException;

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
        $this->checkConditionUploadFile();
        $rules = [
            "libelle" => "required",
            "localisation_id" => "required",
            "commune_id" => "required",
            "nbre_piece" => "required",
            "libelle" => "required",
        ];
        $validation = Validator::make(post(), $rules);
        if ($validation->fails()) {
            throw new ValidationException($validation);
        }
        $publication = new PublicationModel;
        $publication->commune_id = post('commune_id');
        $publication->prix = post('prix');
        // $publication->ville_id = post('ville_id');
        $publication->localisation_id = post('localisation_id');
        $publication->libelle = post('libelle');
        $publication->nbre_piece = post('nbre_piece'); 
        // $publication->published_at = now();
        $publication->cover = Input::file('cover');
        $publication->description = post('description'); 
        // Publication en attente 
        $publication->statut_publication = 1;
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
        Flash::success('La publication a été enregistré avec succès , notre équipe analysera votre publication afin de la publier sur le site !');
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
            '#imageResult' => '<img src="' . $file->getThumb(100, 100, ['mode' => 'crop']) . '" class="img-responsive">'
        ];
    }

    // Check all conditions upload file
    public function checkConditionUploadFile(){
        $image = Input::all();
        if(array_key_exists('cover', $image)){
            if(!$this->checkUploadFile($image['cover'])){
                throw new ApplicationException("Le format du fichier est incorrect ou la taille est supérieur a 500MB !");
            };
        }
        if(array_key_exists('fileUpload', $image)){
            foreach($image['fileUpload'] as $index => $photo){
                if(!$this->checkUploadFile($photo)){
                    throw new ApplicationException("Le format du fichier (".($index*1+1).") est incorrect ou la taille est supérieur a 500MB  !");
                };
            }
        }
    }

    public function checkUploadFile($photo){
        if($photo->getSize() > 512000){
            return false;
        }
        if($photo->getMimeType() == 'image/vnd.adobe.photoshop'){
            return false;
        }
        return true;
    }
}
