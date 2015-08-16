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

use App\Events\UserWasCreated;

Route::get('/', function () {
	print_r(getCountyCrops(1));
    return sayHi();
	//return committeeVote(1);
    /*$test = Dash\Collection\map(
        array(1, 2, 3),
        function($n) { return $n * 2; }
    );
    return $test;*/
    //return view('index');
});

Route::group(['prefix' => 'reports'], function()
{
    Route::get('/first', function(){
        return view('test')->with('user');
    });
});

Route::group(['prefix' => 'rpts'], function(){
    Route::get('/', 'RptsController@index');
    Route::get('/activedetail', 'RptsController@activedetail');
    Route::get('/cropmix', 'RptsController@cropmix');
    Route::get('/dump', 'RptsController@dump');
});

Route::group(['prefix' => 'api'], function()
{
	Route::post('authenticate', 'AuthenticateController@authenticate');
	Route::get('authenticate/user', 'AuthenticateController@getAuthenticatedUser');
	Route::resource('addfins', 'AddendumfinancialsController');
	Route::resource('addloans', 'AddendumloansController');
	Route::resource('admingraders', 'AdmingradersController');
	Route::resource('agencies', 'AgenciesController');
	Route::resource('aphdbs', 'AphdbsController');
	Route::resource('attachments', 'AttachmentsController');
	Route::resource('agents', 'AgentsController');
	Route::resource('applicantfins', 'ApplicantfinancialsController');
	Route::resource('applicants', 'ApplicantsController');
	Route::resource('authenticate', 'AuthenticateController', ['only' => ['index']]);
	Route::resource('comments', 'CommentsController');
	Route::resource('commentstatuses', 'CommentstatusesController');
	Route::resource('commentusers', 'CommentusersController');
	Route::resource('committees', 'CommitteesController');
	Route::resource('committeespecs', 'CommitteespecsController');
	Route::resource('corps', 'CorporationsController');
	Route::resource('counties', 'CountiesController');
	Route::resource('cropexpenses', 'CropexpensesController');
	Route::resource('crops', 'CropsController');
	Route::resource('xcols', 'CrosscollateralsController');
	Route::resource('defaultcountycrops', 'DefaultcountycropsController');
	Route::resource('defaultexpenses', 'DefaultexpensesController');
	Route::resource('disbursements', 'DisbursementsController');
	Route::resource('distributors', 'DistributorsController');
	Route::resource('entitytypes', 'EntitytypesController');
	Route::resource('farmers', 'FarmersController');
	Route::resource('exceptions', 'ExceptionsController');
	Route::resource('farmexpenses', 'FarmexpensesController');
	Route::resource('farms', 'FarmsController');
	Route::resource('farmunits', 'FarmunitsController');
	Route::resource('globals', 'GlobvarsController');
	Route::resource('guarantors', 'GuarantorsController');
	Route::resource('indirectcropincomes', 'IndirectcropincomesController');
	Route::resource('insopts', 'InsoptsController');
	Route::resource('inspols', 'InspolsController');
	Route::resource('insunits', 'InsunitsController');
	Route::resource('instypes', 'InstypesController');
	Route::resource('joints', 'JointventuresController');
	Route::resource('loanconditions', 'LoanconditionsController');
	Route::resource('loancrops', 'LoancropsController');
	Route::resource('loandistributors', 'LoandistributorsController');
	Route::resource('loanexceptions', 'LoanexceptionsController');
	Route::resource('loanfins', 'LoanfinancialsController');
	Route::resource('loans', 'LoansController');
	Route::resource('loanpractices', 'LoanpracticesController');
	Route::resource('loanquestions', 'LoanquestionsController');
	Route::resource('loanstatus', 'LoanstatusController');
	Route::resource('loantypes', 'LoantypesController');
	Route::resource('locations', 'LocationsController');
	Route::resource('measures', 'MeasuresController');
	Route::resource('notifications', 'NotificationsController');
	Route::resource('optimizerviewoptions', 'OptimizerviewoptionsController');
	Route::resource('othercollaterals', 'OthercollateralsController');
	Route::resource('partners', 'PartnersController');
	Route::resource('pdfapps', 'PdfappsController');
	Route::resource('prerequisites', 'PrerequisitesController');
	Route::resource('priorliens', 'PriorliensController');
	Route::resource('qbtrans', 'QbtransController');
	Route::resource('ratioconstraints', 'RatioconstraintsController');
	Route::resource('recomments', 'RecommentsController');
	Route::resource('references', 'ReferencesController');
	Route::resource('regions', 'RegionsController');
	Route::resource('reportfilters', 'ReportfiltersController');
	Route::resource('reportoptions', 'ReportoptionsController');
	Route::resource('reports', 'ReportsController');
	Route::resource('requireddocuments', 'RequireddocumentsController');
	Route::resource('responsibilities', 'ResponsibilitiesController');
	Route::resource('responsibilityroles', 'ResponsibilityrolesController');
	Route::resource('roles', 'RolesController');
	Route::resource('spendcats', 'SpendcatsController');
	Route::resource('states', 'StatesController');
	Route::resource('storages', 'StoragecontractsController');
	Route::resource('systemics', 'SystemicsController');
	Route::resource('unitpractices', 'UnitpracticesController');
	Route::resource('uploads', 'UploadsController');
	Route::resource('users', 'UsersController');
	Route::resource('viewfilters', 'ViewfiltersController');
	Route::resource('viewoptions', 'ViewoptionsController');

	Route::get('expenses/{id}/crop/{cropID}', 'CropexpensesController@byCrop');
	Route::get('loans/{id}/crops/{cid}/acres', 'LoanpracticesController@acresOfCrop');
	Route::get('loans/{id}/aphdb', 'AphdbsController@byLoan');
	Route::get('loans/{id}/loancrops', 'LoancropsController@byLoan');
	Route::get('loans/{id}/prereqs', 'PrerequisitesController@byLoan');
	Route::get('matrix', 'MatrixController@index');
});
