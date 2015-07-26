<?php

namespace App\Http\Controllers;

use App\Region;
use App\Transformers\RegionTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class RegionsController extends ApiController
{
    protected $records;

    public function __construct(Region $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, RegionTransformer $regionTransformer)
    {
        // show all
        $records = Region::with('locations')->get();
        $collection = new Collection($records, $regionTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Region was deleted');
    }

    public function show($id, Manager $fractal, RegionTransformer $regionTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $regionTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Region::create(Input::all());
        return $this->respondCreated('Region was created');
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Region::create(Input::all());
            return $this->respondCreated('Region was created');
        }

        $record->fill(Input::all())->save();
        return $this->respondCreated('Region was created');
    }
}
