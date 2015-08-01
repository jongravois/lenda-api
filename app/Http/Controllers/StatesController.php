<?php

namespace App\Http\Controllers;

use App\State;
use App\Transformers\StateTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class StatesController extends ApiController
{
    protected $records;

    public function __construct(State $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, StateTransformer $stateTransformer)
    {
        // show all
        $records = State::all();
        $collection = new Collection($records, $stateTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('State was deleted');
    }

    public function show($id, Manager $fractal, StateTransformer $stateTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $stateTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = State::create(Input::all());
        return $this->respond($record->id);
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            State::create(Input::all());
            return $this->respond($record);
        }

        $record->fill(Input::all())->save();
        return $this->respond($record);
    }
}
