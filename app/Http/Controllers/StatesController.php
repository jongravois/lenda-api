<?php

namespace App\Http\Controllers;

use App\State;
use App\Transformers\StateTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
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
        $records = State::all();
        $collection = new Collection($records, $stateTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function create()
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function show($id, Manager $fractal, StateTransformer $stateTransformer)
    {
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $stateTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        //
    }

    public function update($id)
    {
        //
    }
}
