<?php

namespace App\Http\Controllers;

use App\Insunit;
use App\Transformers\InsunitTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class InsunitsController extends ApiController
{
    protected $records;

    public function __construct(Insunit $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, InsunitTransformer $insunitTransformer)
    {
        $records = Insunit::all();
        $collection = new Collection($records, $insunitTransformer);
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

    public function show($id, Manager $fractal, InsunitTransformer $insunitTransformer)
    {
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $insunitTransformer);
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
