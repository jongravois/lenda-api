<?php

namespace App\Http\Controllers;

use App\Crop;
use App\Transformers\CropTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class CropsController extends ApiController
{
    protected $records;

    public function __construct(Crop $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, CropTransformer $cropTransformer)
    {
        $records = Crop::all();
        $collection = new Collection($records, $cropTransformer);
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

    public function show($id, Manager $fractal, CropTransformer $cropTransformer)
    {
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $cropTransformer);
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
