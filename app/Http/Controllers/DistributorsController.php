<?php

namespace App\Http\Controllers;

use App\Distributor;
use App\Transformers\DistributorTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class DistributorsController extends ApiController
{
    protected $records;

    public function __construct(Distributor $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, DistributorTransformer $distributorTransformer)
    {
        // show all
        $records = Distributor::with('states')->get();
        $collection = new Collection($records, $distributorTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Distributor was deleted');
    }

    public function show($id, Manager $fractal, DistributorTransformer $distributorTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $distributorTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Distributor::create(Input::all());
        return $this->respond($record->id);
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Distributor::create(Input::all());
            return $this->respond($record);
        }

        $record->fill(Input::all())->save();
        return $this->respond($record);
    }
}
