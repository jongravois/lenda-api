<?php

namespace App\Http\Controllers;

use App\Spendcat;
use App\Transformers\SpendcatTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class SpendcatsController extends ApiController
{
    protected $records;

    public function __construct(Spendcat $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, SpendcatTransformer $spendcatTransformer)
    {
        $records = Spendcat::all();
        $collection = new Collection($records, $spendcatTransformer);
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

    public function show($id, Manager $fractal, SpendcatTransformer $spendcatTransformer)
    {
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $spendcatTransformer);
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
