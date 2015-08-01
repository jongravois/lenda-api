<?php

namespace App\Http\Controllers;

use App\Defaultcountycrop;
use App\Transformers\DefaultcountycropTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class DefaultcountycropsController extends ApiController
{
    protected $records;

    public function __construct(Defaultcountycrop $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, DefaultcountycropTransformer $defaultcountycropTransformer)
    {
        // show all
        $records = Defaultcountycrop::all();
        $collection = new Collection($records, $defaultcountycropTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Defaultcountycrop was deleted');
    }

    public function show($id, Manager $fractal, DefaultcountycropTransformer $defaultcountycropTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $defaultcountycropTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Defaultcountycrop::create(Input::all());
        return $this->respond($record->id);
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Defaultcountycrop::create(Input::all());
            return $this->respond($record);
        }

        $record->fill(Input::all())->save();
        return $this->respond($record);
    }
}
