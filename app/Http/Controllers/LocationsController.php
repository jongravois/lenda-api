<?php

namespace App\Http\Controllers;

use App\Location;
use App\Transformers\LocationTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class LocationsController extends ApiController
{
    protected $records;

    public function __construct(Location $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, LocationTransformer $locationTransformer)
    {
        // show all
        $records = Location::all();
        $collection = new Collection($records, $locationTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Location was deleted');
    }

    public function show($id, Manager $fractal, LocationTransformer $locationTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $locationTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Location::create(Input::all());
        return $this->respond($record->id);
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Location::create(Input::all());
            return $this->respond($record);
        }

        $record->fill(Input::all())->save();
        return $this->respond($record);
    }
}
