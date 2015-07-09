<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

Route::group(['prefix' => 'api'], function()
{
	Route::resource('agencies', 'AgenciesController');
	Route::resource('agents', 'AgentsController');
	Route::resource('authenticate', 'AuthenticateController', ['only' => ['index']]);
	Route::resource('counties', 'CountiesController');
	Route::resource('crops', 'CropsController');
	Route::resource('insopts', 'InsoptsController');
	Route::resource('inspols', 'InspolsController');
	Route::resource('insunits', 'InsunitsController');
	Route::resource('instypes', 'InstypesController');
	Route::resource('locations', 'LocationsController');
	Route::resource('regions', 'RegionsController');
	Route::resource('users', 'UsersController');
	Route::post('authenticate', 'AuthenticateController@authenticate');
	Route::get('authenticate/user', 'AuthenticateController@getAuthenticatedUser');
});
