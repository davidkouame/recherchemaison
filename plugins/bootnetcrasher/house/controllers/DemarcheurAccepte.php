<?php namespace bootnetcrasher\House\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class DemarcheurAccepte extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('bootnetcrasher.House', 'demarcheurs', 'demarcheursacceptes');
    }

    public function listExtendQuery($query) {
        $query->whereHas('user', function($query){
            $query->where('is_activated', 1);
        })->orderBy('created_at','desc');
    }
}
