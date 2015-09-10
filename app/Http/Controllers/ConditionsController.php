<?php

namespace App\Http\Controllers;

use App\Condition;
use App\Transformers\ConditionTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class ConditionsController extends ApiController
{
    protected $records;

    public function __construct(Condition $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, ConditionTransformer $conditionTransformer)
    {
        // show all
        $records = Condition::all();
        $collection = new Collection($records, $conditionTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Condition was deleted');
    }

    public function show($id, Manager $fractal, ConditionTransformer $conditionTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $conditionTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Condition::create(Input::all());
        return $this->respond($record->id);
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Condition::create(Input::all());
            return $this->respond($record);
        }

        $record->fill(Input::all())->save();
        return $this->respond($record);
    }
}
