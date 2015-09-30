<?php

namespace App\Http\Controllers;

use App\Plannedcrop;
use App\Transformers\PlannedcropTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class PlannedcropsController extends ApiController
{
    protected $records;

    public function __construct(Plannedcrop $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, PlannedcropTransformer $plannedcropTransformer)
    {
        // show all
        $records = Plannedcrop::all();
        $collection = new Collection($records, $plannedcropTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Plannedcrop was deleted');
    }

    public function show($id, Manager $fractal, PlannedcropTransformer $plannedcropTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $plannedcropTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Plannedcrop::create(Input::all());
        return $this->respond($record->id);
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Plannedcrop::create(Input::all());
            return $this->respond($record);
        }

        $record->fill(Input::all())->save();
        return $this->respond($record);
    }
}
