<?php

namespace App\Http\Controllers;

use App\Reference;
use App\Transformers\ReferenceTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class ReferencesController extends ApiController
{
    protected $records;

    public function __construct(Reference $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, ReferenceTransformer $referenceTransformer)
    {
        // show all
        $records = Reference::all();
        $collection = new Collection($records, $referenceTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Reference was deleted');
    }

    public function show($id, Manager $fractal, ReferenceTransformer $referenceTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $referenceTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Reference::create(Input::all());
        return $this->respond($record->id);
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Reference::create(Input::all());
            return $this->respond($record);
        }

        $record->fill(Input::all())->save();
        return $this->respond($record);
    }
}
