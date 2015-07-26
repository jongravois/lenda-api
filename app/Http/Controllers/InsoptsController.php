<?php

namespace App\Http\Controllers;

use App\Insopt;
use App\Transformers\InsoptTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
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
        // show all
        $records = Insopt::all();
        $collection = new Collection($records, $insoptTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Insopt was deleted');
    }

    public function show($id, Manager $fractal, InsoptTransformer $insoptTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $insoptTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Insopt::create(Input::all());
        return $this->respondCreated('Insopt was created');
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Insopt::create(Input::all());
            return $this->respondCreated('Insopt was created');
        }

        $record->fill(Input::all())->save();
        return $this->respondCreated('Insopt was created');
    }
}
