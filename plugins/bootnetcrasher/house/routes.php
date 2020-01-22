<?php

    Route::get('delete-publication/{publication_id}', function ($publication_id){
        $query = bootnetcrasher\House\Models\PublicationModel::where('id', $publication_id);
        $redirect = null;
        if($query->first() and $query->first()->agence_id)
            $redirect = \Redirect::to('agence/publications');
        else
            $redirect = \Redirect::to('demarcheur/publications');
        $query->delete();
        return $redirect;
    });

    Route::get('unpublisher-publication/{publication_id}', function ($publication_id){
        $publication = bootnetcrasher\House\Models\PublicationModel::find($publication_id);
        if($publication){
            $publication->published_at = null;
            $publication->save();
        }
        if($publication->agence_id)
            return \Redirect::to('agence/publications');
        else
            return \Redirect::to('demarcheur/publications');
    });

    Route::get('publisher-publication/{publication_id}', function ($publication_id){
        $publication = bootnetcrasher\House\Models\PublicationModel::find($publication_id);
        if($publication){
            $publication->published_at = now();
            $publication->save();
        }
        if($publication->agence_id)
            return \Redirect::to('agence/publications');
        else
            return \Redirect::to('demarcheur/publications');
    });

    Route::get('agence/logout', function(){
        \Auth::logout();
        return Redirect::to('agence/login');;
    });

    Route::get('demarcheur/logout', function(){
        \Auth::logout();
        return Redirect::to('demarcheur/login');;
    });