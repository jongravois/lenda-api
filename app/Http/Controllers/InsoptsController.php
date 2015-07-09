<?php

namespace App\Http\Controllers;

use App\Insopt;
use App\Transformers\InsoptTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class InsoptsController extends ApiController
{
    protected $records;

    public function __construct(Insopt $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, InsoptTransformer $insoptTransformer)
    {
        $records = Insopt::all();
        $collection = new Collection($records, $insoptTransformer);
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

    public function show($id, Manager $fractal, InsoptTransformer $insoptTransformer)
    {
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $insoptTransformer);
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
