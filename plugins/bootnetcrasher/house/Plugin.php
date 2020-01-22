<?php namespace bootnetcrasher\House;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            "bootnetcrasher\House\Components\CreatePublicationMaison" => "CreatePublicationMaisonComponent",
            "bootnetcrasher\House\Components\Publications" => "PublicationsMaisonComponent",
            /*Agence*/
            "bootnetcrasher\House\Components\CreateAgence" => "CreateAgenceComponent",
            "bootnetcrasher\House\Components\LoginAgence" => "LoginAgenceComponent",
            "bootnetcrasher\House\Components\AccountAgence" => "AccountAgenceComponent",
            /*Demarcheur*/
            "bootnetcrasher\House\Components\CreateDemarcheur" => "CreateDemarcheurComponent",
            "bootnetcrasher\House\Components\LoginDemarcheur" => "LoginDemarcheurComponent",
            "bootnetcrasher\House\Components\AccountDemarcheur" => "AccountDemarcheurComponent",
        ];
    }

    public function registerSettings()
    {
    }
}
