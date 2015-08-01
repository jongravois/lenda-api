<?php

namespace App\Http\Controllers;

use App\Defaultexpense;
use App\Transformers\DefaultexpenseTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class DefaultexpensesController extends ApiController
{
    protected $records;

    public function __construct(Defaultexpense $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, DefaultexpenseTransformer $defaultexpenseTransformer)
    {
        // show all
        $records = Defaultexpense::all();
        $collection = new Collection($records, $defaultexpenseTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Defaultexpense was deleted');
    }

    public function show($id, Manager $fractal, DefaultexpenseTransformer $defaultexpenseTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $defaultexpenseTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Defaultexpense::create(Input::all());
        return $this->respond($record->id);
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Defaultexpense::create(Input::all());
            return $this->respond($record);
        }

        $record->fill(Input::all())->save();
        return $this->respond($record);
    }
}
