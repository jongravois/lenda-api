<?php

namespace App\Http\Controllers;

use App\County;
use App\Transformers\CountyTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class CountiesController extends ApiController
{
    protected $records;

    public function __construct(County $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, CountyTransformer $countyTransformer)
    {
        $records = County::all();
        $collection = new Collection($records, $countyTransformer);
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

    public function show($id, Manager $fractal, CountyTransformer $countyTransformer)
    {
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $countyTransformer);
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
