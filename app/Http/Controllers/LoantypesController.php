<?php

namespace App\Http\Controllers;

use App\Loantype;
use App\Transformers\LoantypeTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class LoantypesController extends ApiController
{
    protected $records;

    public function __construct(Loantype $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, LoantypeTransformer $loantypeTransformer)
    {
        $records = Loantype::all();
        $collection = new Collection($records, $loantypeTransformer);
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

    public function show($id, Manager $fractal, LoantypeTransformer $loantypeTransformer)
    {
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $loantypeTransformer);
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
