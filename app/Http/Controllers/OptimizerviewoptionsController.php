<?php

namespace App\Http\Controllers;

use App\Optimizerviewoption;
use App\Transformers\OptimizerviewoptionTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class OptimizerviewoptionsController extends ApiController
{
    protected $records;

    public function __construct(Optimizerviewoption $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, OptimizerviewoptionTransformer $optimizerviewoptionTransformer)
    {
        // show all
        $records = Optimizerviewoption::all();
        $collection = new Collection($records, $optimizerviewoptionTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Optimizerviewoption was deleted');
    }

    public function show($id, Manager $fractal, OptimizerviewoptionTransformer $optimizerviewoptionTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $optimizerviewoptionTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Optimizerviewoption::create(Input::all());
        return $this->respond($record->id);
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Optimizerviewoption::create(Input::all());
            return $this->respond($record);
        }

        $record->fill(Input::all())->save();
        return $this->respond($record);
    }
}
