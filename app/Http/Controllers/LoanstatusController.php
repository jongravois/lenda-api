<?php

namespace App\Http\Controllers;

use App\Loanstatus;
use App\Transformers\LoanstatusTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class LoanstatusController extends ApiController
{
    protected $records;

    public function __construct(Loanstatus $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, LoanstatusTransformer $loanstatusTransformer)
    {
        // show all
        $records = Loanstatus::all();
        $collection = new Collection($records, $loanstatusTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Loanstatus was deleted');
    }

    public function show($id, Manager $fractal, LoanstatusTransformer $loanstatusTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $loanstatusTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Loanstatus::create(Input::all());
        return $this->respond($record->id);
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Loanstatus::create(Input::all());
            return $this->respond($record);
        }

        $record->fill(Input::all())->save();
        return $this->respond($record);
    }
}
