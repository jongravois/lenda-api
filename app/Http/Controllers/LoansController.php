<?php namespace App\Http\Controllers;

use App\Events\LoanWasCreated;
use App\Loan;
use App\Transformers\LoanTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class LoansController extends ApiController
{
    protected $records;

    public function __construct(Loan $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, LoanTransformer $loanTransformer)
    {
        // show all records
        $records = Loan::with('agents', 'analyst', 'applicants.corps', 'applicants.entity', 'applicants.fins', 'applicants.joints', 'applicants.partners', 'applicants.state', 'attachments.user', 'buyers', 'comments.responses.user', 'comments.status', 'comments.user', 'committee.role', 'committee.user', 'conditions', 'crophail.crop', 'crophail.county', 'databases.inspols', 'disbursements', 'discounts', 'distributor.states', 'exceptions', 'expenses.crop', 'farmers.applicants.entity', 'farmers.applicants.state', 'farms.aphdb.inspols', 'farms.county.state', 'farms.units', 'farmunits.database.inspols', 'farmunits.farm.county.state', 'farmunits.practices', 'financials', 'fsapayments.farms.county.state', 'indyinc', 'inspols.agent', 'inspols.county', 'inspols.crop', 'inspols.databases.farms', 'loancrops.crop', 'loancrops.practices.farm.aphdb.inspols', 'loancrops.practices.farm.county.state', 'loancrops.yields', 'loandistributor.distributor', 'loantypes', 'location.regions', 'othercollateral', 'practices', 'priorliens', 'quests', 'rebators', 'references', 'status', 'systemics', 'tabstats', 'termmods', 'transactions')->get();
        $collection = new Collection($records, $loanTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Loan was deleted');
    }

    public function show($id, Manager $fractal, LoanTransformer $loanTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $loanTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Loan::create(Input::all());

        event(new LoanWasCreated($record));

        return $this->respond($record->id);
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Loan::create(Input::all());
            return $this->respond($record);
        }

        $record->fill(Input::all())->save();
        return $this->respond($record);
    }
}
