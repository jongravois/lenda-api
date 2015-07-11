<?php

namespace App\Http\Controllers;

use App\Loantype;
use App\Transformers\LoantypeTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class LoantypesController extends ApiController
{
    protected $records;

    public function __construct(Loantype $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, LoantypeTransformer $loantypeTransformer)
    {
        // show all
        $records = Loantype::all();
        $collection = new Collection($records, $loantypeTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respondWithCORS($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Loantype was deleted');
    }

    public function show($id, Manager $fractal, LoantypeTransformer $loantypeTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $loantypeTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Loantype::create(Input::all());
        return $this->respondCreated('Loantype was created');
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->findOrFail($id);

        if(! $record){
            Loantype::create(Input::all());
            return $this->respondCreated('Loantype was created');
        }

        $record->fill(Input::all())->save();
        return $this->respondCreated('Loantype was created');
    }
}
