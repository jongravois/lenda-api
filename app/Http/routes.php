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
	Route::resource('attachments', 'AttachmentsController');
	Route::resource('agents', 'AgentsController');
	Route::resource('authenticate', 'AuthenticateController', ['only' => ['index']]);
	Route::resource('comments', 'CommentsController');
	Route::resource('committees', 'CommitteesController');
	Route::resource('committeespecs', 'CommitteespecsController');
	Route::resource('corps', 'CorporationsController');
	Route::resource('counties', 'CountiesController');
	Route::resource('crops', 'CropsController');
	Route::resource('distributors', 'DistributorsController');
	Route::resource('entitytypes', 'EntitytypesController');
	Route::resource('farmers', 'FarmersController');
	Route::resource('exceptions', 'ExceptionsController');
	Route::resource('farmexpenses', 'FarmexpensesController');
	Route::resource('farmpractices', 'FarmpracticesController');
	Route::resource('globals', 'GlobvarsController');
	Route::resource('guarantors', 'GuarantorsController');
	Route::resource('insopts', 'InsoptsController');
	Route::resource('inspols', 'InspolsController');
	Route::resource('insunits', 'InsunitsController');
	Route::resource('instypes', 'InstypesController');
	Route::resource('joints', 'JointventuresController');
	Route::resource('loanconditions', 'LoanconditionsController');
	Route::resource('loanstatus', 'LoanstatusController');
	Route::resource('loantypes', 'LoantypesController');
	Route::resource('locations', 'LocationsController');
	Route::resource('measures', 'MeasuresController');
	Route::resource('notifications', 'NotificationsController');
	Route::resource('othercollaterals', 'OthercollateralsController');
	Route::resource('partners', 'PartnersController');
	Route::resource('pdfapps', 'PdfappsController');
	Route::resource('prerequisites', 'PrerequisitesController');
	Route::resource('priorliens', 'PriorliensController');
	Route::resource('ratioconstraints', 'RatioconstraintsController');
	Route::resource('recomments', 'RecommentsController');
	Route::resource('references', 'ReferencesController');
	Route::resource('regions', 'RegionsController');
	Route::resource('reports', 'ReportsController');
	Route::resource('requireddocuments', 'RequireddocumentsController');
	Route::resource('roles', 'RolesController');
	Route::resource('spendcats', 'SpendcatsController');
	Route::resource('states', 'StatesController');
	Route::resource('storages', 'StoragecontractsController');
	Route::resource('systemics', 'SystemicsController');
	Route::resource('uploads', 'UploadsController');
	Route::resource('users', 'UsersController');
	Route::resource('viewfilters', 'ViewfiltersController');
	Route::resource('viewoptions', 'ViewoptionsController');
	Route::post('authenticate', 'AuthenticateController@authenticate');
	Route::get('authenticate/user', 'AuthenticateController@getAuthenticatedUser');
});
