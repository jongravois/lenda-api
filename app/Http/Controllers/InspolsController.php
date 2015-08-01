<?php

namespace App\Http\Controllers;

use App\Inspol;
use App\Transformers\InspolTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class InspolsController extends ApiController
{
    protected $records;

    public function __construct(Inspol $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, InspolTransformer $inspolTransformer)
    {
        // show all
        $records = Inspol::all();
        $collection = new Collection($records, $inspolTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Inspol was deleted');
    }

    public function show($id, Manager $fractal, InspolTransformer $inspolTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $inspolTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Inspol::create(Input::all());
        return $this->respond($record->id);
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Inspol::create(Input::all());
            return $this->respond($record);
        }

        $record->fill(Input::all())->save();
        return $this->respond($record);
    }
}
