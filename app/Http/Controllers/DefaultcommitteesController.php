<?php

namespace App\Http\Controllers;

use App\Defaultcommittee;
use App\Transformers\DefaultcommitteeTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class DefaultcommitteesController extends ApiController
{
    protected $records;

    public function __construct(Defaultcommittee $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, DefaultcommitteeTransformer $defaultcommitteeTransformer)
    {
        // show all
        $records = Defaultcommittee::all();
        $collection = new Collection($records, $defaultcommitteeTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Defaultcommittee was deleted');
    }

    public function show($id, Manager $fractal, DefaultcommitteeTransformer $defaultcommitteeTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $defaultcommitteeTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Defaultcommittee::create(Input::all());
        return $this->respond($record->id);
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Defaultcommittee::create(Input::all());
            return $this->respond($record);
        }

        $record->fill(Input::all())->save();
        return $this->respond($record);
    }
}
