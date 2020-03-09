<?php namespace bootnetcrasher\House\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class AgenceRefusee extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
    }

    public function listExtendQuery($query) {
        $query->whereHas('user', function($query){
            $query->where('is_activated', -1);
        })->orderBy('created_at','desc');
    }

    public function onActivated(){
        foreach(post('checked') as $agenceId){
            $agence = DemarcheurModel::where('id', $$agenceId)->first();
            if($agence){
                $user = $agence->user;
                $user->is_activated = 1;
                $user->activated_at = now();
                $user->save();
            }
        }
        if(count(post("checked")) > 1){
            \Flash::success("Les comptes agences ont été activé avec success !");
        }else if(count(post("checked")) == 1){
            \Flash::success("Le compte agence a été activé avec success !");
        }else{
            \Flash::error("Veillez sélectionner une agence !");
        }
        return $this->listRefresh();
    }
}
