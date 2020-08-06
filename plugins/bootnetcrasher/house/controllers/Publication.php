<?php namespace bootnetcrasher\House\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use bootnetcrasher\House\Models\PublicationModel;
use Flash;
use Redirect;
use Backend;

class Publication extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
    }

    // Publiez un article 
    public function onPublished(){
        $checkedIds = post('checked');
        foreach($checkedIds as $checkedId){
            // Recuperation de l'article
            $article = PublicationModel::find($checkedId);
            if($article){
                $article->statut_publication = 2;
                $article->published_at = now();
                $article->save();
            }
            Flash::success("Votre article a été publié avec succès !");
        }
        return Redirect::to(Backend::url("bootnetcrasher/house/publication"));
    }

    // Refusez la publication d'un aricle
    public function onRefused(){
        $checkedIds = post('checked');
        foreach($checkedIds as $checkedId){
            // Recuperation de l'article
            $article = PublicationModel::find($checkedId);
            if($article){
                $article->statut_publication = 3;
                $article->published_at = null;
                $article->save();
            }
        }
        Flash::success("Votre article a été refusé avec succès !");
        return Redirect::to(Backend::url("bootnetcrasher/house/publication"));
    }
}
