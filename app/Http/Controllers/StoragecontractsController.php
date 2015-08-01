<?php

namespace App\Http\Controllers;

use App\Storagecontract;
use App\Transformers\StoragecontractTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class StoragecontractsController extends ApiController
{
    protected $records;

    public function __construct(Storagecontract $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, StoragecontractTransformer $storagecontractTransformer)
    {
        // show all
        $records = Storagecontract::all();
        $collection = new Collection($records, $storagecontractTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Storagecontract was deleted');
    }

    public function show($id, Manager $fractal, StoragecontractTransformer $storagecontractTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $storagecontractTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Storagecontract::create(Input::all());
        return $this->respond($record->id);
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Storagecontract::create(Input::all());
            return $this->respond($record);
        }

        $record->fill(Input::all())->save();
        return $this->respond($record);
    }
}
