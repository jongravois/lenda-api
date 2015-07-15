<?php

namespace App\Http\Controllers;

use App\Cropexpense;
use App\Transformers\CropexpenseTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class CropexpensesController extends ApiController
{
    protected $records;

    public function __construct(Cropexpense $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, CropexpenseTransformer $cropexpenseTransformer)
    {
        // show all
        $records = Cropexpense::all();
        $collection = new Collection($records, $cropexpenseTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respondWithCORS($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Cropexpense was deleted');
    }

    public function show($id, Manager $fractal, CropexpenseTransformer $cropexpenseTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $cropexpenseTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Cropexpense::create(Input::all());
        return $this->respondCreated('Cropexpense was created');
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->findOrFail($id);

        if(! $record){
            Cropexpense::create(Input::all());
            return $this->respondCreated('Cropexpense was created');
        }

        $record->fill(Input::all())->save();
        return $this->respondCreated('Cropexpense was created');
    }
}
