<?php

namespace App\Http\Controllers;

use App\Insunit;
use App\Transformers\InsunitTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class InsunitsController extends ApiController
{
    protected $records;

    public function __construct(Insunit $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, InsunitTransformer $insunitTransformer)
    {
        // show all
        $records = Insunit::all();
        $collection = new Collection($records, $insunitTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Insunit was deleted');
    }

    public function show($id, Manager $fractal, InsunitTransformer $insunitTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $insunitTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Insunit::create(Input::all());
        return $this->respondCreated('Insunit was created');
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Insunit::create(Input::all());
            return $this->respondCreated('Insunit was created');
        }

        $record->fill(Input::all())->save();
        return $this->respondCreated('Insunit was created');
    }
}
