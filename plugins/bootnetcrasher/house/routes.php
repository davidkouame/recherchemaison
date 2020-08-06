<?php

    Route::get('delete-publication/{publication_id}', function ($publication_id){
        $query = bootnetcrasher\House\Models\PublicationModel::where('id', $publication_id);
        $redirect = null;
        if($query->first() and $query->first()->agence_id)
            $redirect = \Redirect::to('agence/publications?success-delete=1');
        else
            $redirect = \Redirect::to('demarcheur/publications?success-delete=1');
        $query->delete();
        return $redirect->with('message', 'test');
    });

    Route::get('unpublisher-publication/{publication_id}', function ($publication_id){
        $publication = bootnetcrasher\House\Models\PublicationModel::find($publication_id);
        if($publication){
            $publication->published_at = null;
            $publication->save();
        }
        if($publication->agence_id)
            return \Redirect::to('agence/publications?success-publisher=1');
        else
            return \Redirect::to('demarcheur/publications?success-publisher=2');
    });

    Route::get('publisher-publication/{publication_id}', function ($publication_id){
        $publication = bootnetcrasher\House\Models\PublicationModel::find($publication_id);
        if($publication){
            $publication->published_at = now();
            $publication->save();
        }
        if($publication->agence_id)
            return \Redirect::to('agence/publications?success-publisher=1');
        else
            return \Redirect::to('demarcheur/publications?success-publisher=2');
    });

    Route::get('agence/logout', function(){
        \Auth::logout();
        return Redirect::to('agence/login');;
    });

    Route::get('demarcheur/logout', function(){
        \Auth::logout();
        return Redirect::to('demarcheur/login');;
    });

    Route::get('kill-process-cron', function(){
        exec("ps ax | grep -i 'queue:work' | grep -v 'grep'
        ", $pids);
        if($pids){
            exec("kill -9 ".(int)$pids[0]);
        }
        echo "Le process de cron s'est coupé avec succès !";
    });

    /*Route::get('logout', function(){
        \Auth::logout();
        return Redirect::to('auth/login');;
    });*/

    Route::resource('api/v1/communes', 'AhmadFatoni\ApiGenerator\Controllers\API\communeController', ['except' => ['destroy', 'create', 'edit']]);
    Route::get('api/v1/communes/{id}/delete', ['as' => 'api/v1/communes.delete', 'uses' => 'AhmadFatoni\ApiGenerator\Controllers\API\communeController@destroy']);