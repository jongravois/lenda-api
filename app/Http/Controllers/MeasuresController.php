<?php

namespace App\Http\Controllers;

use App\Measure;
use App\Transformers\MeasureTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class MeasuresController extends ApiController
{
    protected $records;

    public function __construct(Measure $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, MeasureTransformer $measureTransformer)
    {
        // show all
        $records = Measure::all();
        $collection = new Collection($records, $measureTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respondWithCORS($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Measure was deleted');
    }

    public function show($id, Manager $fractal, MeasureTransformer $measureTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $measureTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Measure::create(Input::all());
        return $this->respondCreated('Measure was created');
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->findOrFail($id);

        if(! $record){
            Measure::create(Input::all());
            return $this->respondCreated('Measure was created');
        }

        $record->fill(Input::all())->save();
        return $this->respondCreated('Measure was created');
    }
}
