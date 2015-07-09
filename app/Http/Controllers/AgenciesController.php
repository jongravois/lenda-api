<?php

namespace App\Http\Controllers;

use App\Agency;
use App\Transformers\AgencyTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class AgenciesController extends ApiController
{
    protected $records;

    public function __construct(Agency $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, AgencyTransformer $agencyTransformer)
    {
        $records = Agency::all();
        $collection = new Collection($records, $agencyTransformer);
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

    public function show($id, Manager $fractal, AgencyTransformer $agencyTransformer)
    {
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $agencyTransformer);
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
