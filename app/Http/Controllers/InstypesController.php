<?php

namespace App\Http\Controllers;

use App\Instype;
use App\Transformers\InstypeTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class InstypesController extends ApiController
{
    protected $records;

    public function __construct(Instype $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, InstypeTransformer $instypeTransformer)
    {
        $records = Instype::all();
        $collection = new Collection($records, $instypeTransformer);
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

    public function show($id, Manager $fractal, InstypeTransformer $instypeTransformer)
    {
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $instypeTransformer);
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
