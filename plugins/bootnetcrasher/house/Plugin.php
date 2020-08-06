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

        $schedule->call(function () {
            trace_log("Début du traitement: Les publications expirées seront mis à jour ");
            $date = new \DateTime(date("Y-m-d H:m:s"));
            $date->modify('-30 day');
            $tomorrowDATE = $date->format('Y-m-d H:m:s');
            $publications = \DB::table('bootnetcrasher_house_publication')->where('published_at', '<', $tomorrowDATE)
            ->whereNull('expired_at')->get();
            foreach($publications as $publication){
                \DB::table('bootnetcrasher_house_publication')
                ->where('id', $publication->id)
                ->update(['expired_at' => now()]);
            }
            trace_log("Fin du traitement: Les publications expirées seront mis à jour ");
        })->everyMinute();
    }
}
