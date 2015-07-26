<?php

namespace App\Http\Controllers;

use App\Loanfinancial;
use App\Transformers\LoanfinancialTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class LoanfinancialsController extends ApiController
{
    protected $records;

    public function __construct(Loanfinancial $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, LoanfinancialTransformer $loanfinancialTransformer)
    {
        // show all
        $records = Loanfinancial::all();
        $collection = new Collection($records, $loanfinancialTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Loanfinancial was deleted');
    }

    public function show($id, Manager $fractal, LoanfinancialTransformer $loanfinancialTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $loanfinancialTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Loanfinancial::create(Input::all());
        return $this->respondCreated('Loanfinancial was created');
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Loanfinancial::create(Input::all());
            return $this->respondCreated('Loanfinancial was created');
        }

        $record->fill(Input::all())->save();
        return $this->respondCreated('Loanfinancial was created');
    }
}
