<?php

namespace App\Http\Controllers;

use App\Rebator;
use App\Transformers\RebatorTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class RebatorsController extends ApiController
{
    protected $records;

    public function __construct(Rebator $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, RebatorTransformer $rebatorTransformer)
    {
        // show all
        $records = Rebator::all();
        $collection = new Collection($records, $rebatorTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Rebator was deleted');
    }

    public function show($id, Manager $fractal, RebatorTransformer $rebatorTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $rebatorTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Rebator::create(Input::all());
        return $this->respond($record->id);
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Rebator::create(Input::all());
            return $this->respond($record);
        }

        $record->fill(Input::all())->save();
        return $this->respond($record);
    }
}
