<?php

namespace App\Http\Controllers;

use App\Farm;
use App\Transformers\FarmTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class FarmsController extends ApiController
{
    protected $records;

    public function __construct(Farm $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, FarmTransformer $farmTransformer)
    {
        // show all
        $records = Farm::all();
        $collection = new Collection($records, $farmTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Farm was deleted');
    }

    public function show($id, Manager $fractal, FarmTransformer $farmTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $farmTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Farm::create(Input::all());
        return $this->respond($record->id);
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Farm::create(Input::all());
            return $this->respond($record);
        }

        $record->fill(Input::all())->save();
        return $this->respond($record);
    }
}
