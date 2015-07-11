<?php

namespace App\Http\Controllers;

use App\Entitytype;
use App\Transformers\EntitytypeTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class EntitytypesController extends ApiController
{
    protected $records;

    public function __construct(Entitytype $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, EntitytypeTransformer $entitytypeTransformer)
    {
        // show all
        $records = Entitytype::all();
        $collection = new Collection($records, $entitytypeTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respondWithCORS($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Entitytype was deleted');
    }

    public function show($id, Manager $fractal, EntitytypeTransformer $entitytypeTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $entitytypeTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Entitytype::create(Input::all());
        return $this->respondCreated('Entitytype was created');
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->findOrFail($id);

        if(! $record){
            Entitytype::create(Input::all());
            return $this->respondCreated('Entitytype was created');
        }

        $record->fill(Input::all())->save();
        return $this->respondCreated('Entitytype was created');
    }
}
