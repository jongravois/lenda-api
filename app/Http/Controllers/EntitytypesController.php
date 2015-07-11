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
        $records = Entitytype::all();
        $collection = new Collection($records, $entitytypeTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function create()
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function show($id, Manager $fractal, EntitytypeTransformer $entitytypeTransformer)
    {
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $entitytypeTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        //
    }

    public function update($id)
    {
        //
    }
}
