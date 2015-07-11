<?php

namespace App\Http\Controllers;

use App\Measure;
use App\Transformers\MeasureTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class MeasuresController extends ApiController
{
    protected $records;

    public function __construct(Measure $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, MeasureTransformer $measureTransformer)
    {
        $records = Measure::all();
        $collection = new Collection($records, $measureTransformer);
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

    public function show($id, Manager $fractal, MeasureTransformer $measureTransformer)
    {
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $measureTransformer);
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
