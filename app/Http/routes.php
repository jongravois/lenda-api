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
    dd(getLoanAgencies(1));
    //return getTotalPartyCommit('arm', 1);
    //return getTotalLoanFarmExpenses(1);
    //print_r(getCropsInLoan(1));
    //return getTotalCropCommit('arm', 1, 1) + getTotalCropCommit('dist', 1, 1) + getTotalCropCommit('other', 1, 1);
    //return view('index');
});

Route::group(['prefix' => 'api'], function()
{
	Route::post('authenticate', 'AuthenticateController@authenticate');
	Route::get('authenticate/user', 'AuthenticateController@getAuthenticatedUser');
	Route::resource('addfins', 'AddendumfinancialsController');
	Route::resource('addloans', 'AddendumloansController');
	Route::resource('admingraders', 'AdmingradersController');
	Route::resource('agencies', 'AgenciesController');
	Route::resource('attachments', 'AttachmentsController');
	Route::resource('agents', 'AgentsController');
	Route::resource('applicantfins', 'ApplicantfinancialsController');
	Route::resource('applicants', 'ApplicantsController');
	Route::resource('authenticate', 'AuthenticateController', ['only' => ['index']]);
	Route::resource('comments', 'CommentsController');
	Route::resource('commentstatuses', 'CommentstatusesController');
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
	Route::resource('farmpractices', 'FarmpracticesController');
	Route::resource('farms', 'FarmsController');
	Route::resource('farmunits', 'FarmunitsController');
	Route::resource('globals', 'GlobvarsController');
	Route::resource('guarantors', 'GuarantorsController');
	Route::resource('insopts', 'InsoptsController');
	Route::resource('inspols', 'InspolsController');
	Route::resource('insunits', 'InsunitsController');
	Route::resource('instypes', 'InstypesController');
	Route::resource('joints', 'JointventuresController');
	Route::resource('loanconditions', 'LoanconditionsController');
	Route::resource('loandistributors', 'LoandistributorsController');
	Route::resource('loanexceptions', 'LoanexceptionsController');
	Route::resource('loanfins', 'LoanfinancialsController');
	Route::resource('loans', 'LoansController');
	Route::resource('loanpractices', 'LoanpracticesController');
	Route::resource('loanquestions', 'LoanquestionsController');
	Route::resource('loanstatus', 'LoanstatusController');
	Route::resource('loantypes', 'LoantypesController');
	Route::resource('locations', 'LocationsController');
	Route::resource('matrix', 'MatrixController');
	Route::resource('measures', 'MeasuresController');
	Route::resource('notifications', 'NotificationsController');
	Route::resource('optimizerviewoptions', 'OptimizerviewoptionsController');
	Route::resource('othercollaterals', 'OthercollateralsController');
	Route::resource('partners', 'PartnersController');
	Route::resource('pdfapps', 'PdfappsController');
	Route::resource('prerequisites', 'PrerequisitesController');
	Route::resource('priorliens', 'PriorliensController');
	Route::resource('ratioconstraints', 'RatioconstraintsController');
	Route::resource('recomments', 'RecommentsController');
	Route::resource('references', 'ReferencesController');
	Route::resource('regions', 'RegionsController');
	Route::resource('reportfilters', 'ReportfiltersController');
	Route::resource('reportoptions', 'ReportoptionsController');
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
});
