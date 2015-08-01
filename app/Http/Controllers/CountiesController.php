<?php

namespace App\Http\Controllers;

use App\County;
use App\Transformers\CountyTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class CountiesController extends ApiController
{
    protected $records;

    public function __construct(County $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, CountyTransformer $countyTransformer)
    {
        // show all
        $records = County::all();
        $collection = new Collection($records, $countyTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('County was deleted');
    }

    public function show($id, Manager $fractal, CountyTransformer $countyTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $countyTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = County::create(Input::all());
        return $this->respond($record->id);
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            County::create(Input::all());
            return $this->respond($record);
        }

        $record->fill(Input::all())->save();
        return $this->respond($record);
    }
}
