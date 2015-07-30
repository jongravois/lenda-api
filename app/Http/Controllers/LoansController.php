<?php

namespace App\Http\Controllers;

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
        // show all
        $records = Loan::with('analyst', 'applicants', 'attachments', 'comments.responses', 'comments.status', 'committee', 'distributor', 'farmers', 'financials', 'loantypes', 'location.regions', 'status')->get();
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
        return $this->respondCreated('Loan was created');
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Loan::create(Input::all());
            return $this->respondCreated('Loan was created');
        }

        $record->fill(Input::all())->save();
        return $this->respondCreated('Loan was created');
    }
}
