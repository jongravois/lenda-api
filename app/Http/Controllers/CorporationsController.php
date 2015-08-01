<?php

namespace App\Http\Controllers;

use App\Corporation;
use App\Transformers\CorporationTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class CorporationsController extends ApiController
{
    protected $records;

    public function __construct(Corporation $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, CorporationTransformer $corporationTransformer)
    {
        // show all
        $records = Corporation::all();
        $collection = new Collection($records, $corporationTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Corporation was deleted');
    }

    public function show($id, Manager $fractal, CorporationTransformer $corporationTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $corporationTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Corporation::create(Input::all());
        return $this->respond($record->id);
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Corporation::create(Input::all());
            return $this->respond($record);
        }

        $record->fill(Input::all())->save();
        return $this->respond($record);
    }
}
