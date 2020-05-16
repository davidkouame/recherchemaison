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
            // "bootnetcrasher\House\Components\CreateAgence" => "CreateAgenceComponent",
            // "bootnetcrasher\House\Components\LoginAgence" => "LoginAgenceComponent",
            "bootnetcrasher\House\Components\AccountAgence" => "AccountAgenceComponent",
            /*Demarcheur*/
            "bootnetcrasher\House\Components\CreateDemarcheur" => "CreateDemarcheurComponent",
            // "bootnetcrasher\House\Components\LoginDemarcheur" => "LoginDemarcheurComponent",
            "bootnetcrasher\House\Components\AccountDemarcheur" => "AccountDemarcheurComponent",
            "bootnetcrasher\House\Components\Home" => "HomeComponent",
            "bootnetcrasher\House\Components\DetailPublication" => "DetailPublicationComponent",
            // "bootnetcrasher\House\Components\Login" => "LoginComponent",
            "bootnetcrasher\House\Components\Register" => "RegisterComponent",
            "bootnetcrasher\House\Components\SendSms" => "SendSmsComponent",
        ];
    }

    public function registerSettings()
    {
    }

    public function boot()
    {
        // dd($this);
        /*\Cms\Classes\CmsController::extend(function($controller) {
            $controller->middleware('RainLab\User\Classes\AuthMiddleware');
        });*/
        // Register middleware
        //$this->app['Illuminate\Contracts\Http\Kernel']
          // ->pushMiddleware('RainLab\User\Classes\AuthMiddleware');
    }

    public function registerSchedule($schedule)
    {      
        exec("ps ax | grep -i 'queue:work' | grep -v 'grep'
        ", $pids);
        if(empty($pids)) {
            // $schedule->command("queue:work --daemon --sleep=5 --tries=3 > storage/logs/system.log")->everyMinute();
            $schedule->command("queue:work")->everyMinute();
        }else{
            trace_log((int)$pids[0]);
        }
    }
}
