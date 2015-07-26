<?php

namespace App\Http\Controllers;

use App\Loancondition;
use App\Transformers\LoanconditionTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class LoanconditionsController extends ApiController
{
    protected $records;

    public function __construct(Loancondition $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, LoanconditionTransformer $loanconditionTransformer)
    {
        // show all
        $records = Loancondition::all();
        $collection = new Collection($records, $loanconditionTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Loancondition was deleted');
    }

    public function show($id, Manager $fractal, LoanconditionTransformer $loanconditionTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $loanconditionTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Loancondition::create(Input::all());
        return $this->respondCreated('Loancondition was created');
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Loancondition::create(Input::all());
            return $this->respondCreated('Loancondition was created');
        }

        $record->fill(Input::all())->save();
        return $this->respondCreated('Loancondition was created');
    }
}
