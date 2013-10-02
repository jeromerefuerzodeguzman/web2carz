<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/', 'FormController@form');
//view record
Route::get('record/{id}', 'RecordController@view');

//add form record
Route::post('form/add', 'FormController@add');

//filter incoming lead
Route::get('receive', array('before' => 'source', 'uses' => 'FormController@form'));

Route::filter('source', function(){
	if (Input::get('source_id') != 'ameyotonorthstar88')
    {
        return "Invalid! Error code:001";
    }
});