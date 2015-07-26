<?php

namespace App\Http\Controllers;

use App\Loanexception;
use App\Transformers\LoanexceptionTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class LoanexceptionsController extends ApiController
{
    protected $records;

    public function __construct(Loanexception $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, LoanexceptionTransformer $loanexceptionTransformer)
    {
        // show all
        $records = Loanexception::all();
        $collection = new Collection($records, $loanexceptionTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Loanexception was deleted');
    }

    public function show($id, Manager $fractal, LoanexceptionTransformer $loanexceptionTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $loanexceptionTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Loanexception::create(Input::all());
        return $this->respondCreated('Loanexception was created');
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Loanexception::create(Input::all());
            return $this->respondCreated('Loanexception was created');
        }

        $record->fill(Input::all())->save();
        return $this->respondCreated('Loanexception was created');
    }
}
