<?php

namespace App\Http\Controllers;

use App\Loancropyield;
use App\Transformers\LoancropyieldTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class LoancropyieldsController extends ApiController
{
    protected $records;

    public function __construct(Loancropyield $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, LoancropyieldTransformer $loancropyieldTransformer)
    {
        // show all
        $records = Loancropyield::all();
        $collection = new Collection($records, $loancropyieldTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Loancropyield was deleted');
    }

    public function show($id, Manager $fractal, LoancropyieldTransformer $loancropyieldTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $loancropyieldTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Loancropyield::create(Input::all());
        return $this->respond($record->id);
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Loancropyield::create(Input::all());
            return $this->respond($record);
        }

        $record->fill(Input::all())->save();
        return $this->respond($record);
    }
}
