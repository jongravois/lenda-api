<?php

namespace App\Http\Controllers;

use App\Farmer;
use App\Transformers\FarmerTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class FarmersController extends ApiController
{
    protected $records;

    public function __construct(Farmer $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, FarmerTransformer $farmerTransformer)
    {
        // show all
        $records = Farmer::all();
        $collection = new Collection($records, $farmerTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Farmer was deleted');
    }

    public function show($id, Manager $fractal, FarmerTransformer $farmerTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $farmerTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Farmer::create(Input::all());
        return $this->respond($record->id);
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Farmer::create(Input::all());
            return $this->respond($record);
        }

        $record->fill(Input::all())->save();
        return $this->respond($record);
    }
}
