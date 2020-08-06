<?php

Route::post('fatoni/generate/api', array('as' => 'fatoni.generate.api', 'uses' => 'AhmadFatoni\ApiGenerator\Controllers\ApiGeneratorController@generateApi'));
Route::post('fatoni/update/api/{id}', array('as' => 'fatoni.update.api', 'uses' => 'AhmadFatoni\ApiGenerator\Controllers\ApiGeneratorController@updateApi'));
Route::get('fatoni/delete/api/{id}', array('as' => 'fatoni.delete.api', 'uses' => 'AhmadFatoni\ApiGenerator\Controllers\ApiGeneratorController@deleteApi'));

Route::resource('api/v1/publications', 'AhmadFatoni\ApiGenerator\Controllers\API\publicationController', ['except' => ['destroy', 'create', 'edit']]);
Route::get('api/v1/publications/{id}/delete', ['as' => 'api/v1/publications.delete', 'uses' => 'AhmadFatoni\ApiGenerator\Controllers\API\publicationController@destroy']);
Route::get('api/v1/publications-find', ['as' => 'api/v1/publications.find', 'uses' => 'AhmadFatoni\ApiGenerator\Controllers\API\publicationController@find']);