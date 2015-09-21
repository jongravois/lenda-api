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

use App\Events\LoanWasCreated;
use App\Events\UserWasCreated;
use App\Loan;
use Carbon\Carbon;

Route::get('/', function () {
		return sayHi();

	/*	$record = Loan::create([
		'applicant_id' => 4,
		'farmer_id' => 12,
		'app_date' => Carbon::now(),
		'default_due_date' => Carbon::createFromFormat('Y-m-d','2015-12-15'),
		'due_date' => Carbon::createFromFormat('Y-m-d','2015-12-15'),
		'loan_type_id' => 2,
		'status_id' => 1,
		'crop_year' => '2015',
		'season' => 'S',
		'loc_id' => 5,
		'region_id' => 3,
		'user_id' => 3
	]);
	event(new LoanWasCreated($record));*/
    //return view('index');
	//print_r(getCountyCrops(1));
	//return committeeVote(1);
});

Route::group(['prefix' => 'reports'], function()
{
    Route::get('/first', function(){
        return view('test')->with('user');
    });
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
	Route::resource('buyers', 'BuyersController');
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
	Route::resource('discounts', 'LoandiscsController');
	Route::resource('distributors', 'DistributorsController');
	Route::resource('entitytypes', 'EntitytypesController');
	Route::resource('farmers', 'FarmersController');
	Route::resource('exceptions', 'ExceptionsController');
	Route::resource('farmexpenses', 'FarmexpensesController');
	Route::resource('farms', 'FarmsController');
	Route::resource('farmunits', 'FarmunitsController');
	Route::resource('fsapayments', 'FsapaymentsController');
	Route::resource('globals', 'GlobvarsController');
	Route::resource('guarantors', 'GuarantorsController');
	Route::resource('indirectcropincomes', 'IndirectcropincomesController');
	Route::resource('insopts', 'InsoptsController');
	Route::resource('inspols', 'InspolsController');
	Route::resource('insunits', 'InsunitsController');
	Route::resource('instypes', 'InstypesController');
	Route::resource('joints', 'JointventuresController');
	Route::resource('libraries', 'LibrariesController');
	Route::resource('librarydoctypes', 'LibrarydoctypesController');
	Route::resource('libraryfileclasses', 'LibraryfileclassesController');
	Route::resource('libraryfiletypes', 'LibraryfiletypesController');
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
	Route::resource('otherincomesources', 'OtherincomesourcesController');
	Route::resource('partners', 'PartnersController');
	Route::resource('pdfapps', 'PdfappsController');
	Route::resource('prerequisites', 'PrerequisitesController');
	Route::resource('priorliens', 'PriorliensController');
	Route::resource('qbtrans', 'QbtransController');
	Route::resource('ratioconstraints', 'RatioconstraintsController');
	Route::resource('rebators', 'RebatorsController');
	Route::resource('recomments', 'RecommentsController');
	Route::resource('references', 'ReferencesController');
	Route::resource('regions', 'RegionsController');
	Route::resource('reportfilters', 'ReportfiltersController');
	Route::resource('reportoptions', 'ReportoptionsController');
	Route::resource('reports', 'ReportsController');
	Route::resource('reporttrackers', 'ReporttrackersController');
	Route::resource('requireddocuments', 'RequireddocumentsController');
	Route::resource('responsibilities', 'ResponsibilitiesController');
	Route::resource('responsibilityroles', 'ResponsibilityrolesController');
	Route::resource('roles', 'RolesController');
	Route::resource('spendcats', 'SpendcatsController');
	Route::resource('states', 'StatesController');
	Route::resource('storages', 'StoragecontractsController');
	Route::resource('termsmods', 'TermsmodificationsController');
	Route::resource('systemics', 'ActivitiesController');
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
	Route::get('loans/{id}/audit', 'ActivitiesController@byLoan');
	Route::get('matrix', 'MatrixController@index');
});
