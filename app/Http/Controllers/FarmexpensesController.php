<?php

namespace App\Http\Controllers;

use App\Farmexpense;
use App\Transformers\FarmexpenseTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class FarmexpensesController extends ApiController
{
    protected $records;

    public function __construct(Farmexpense $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, FarmexpenseTransformer $farmexpenseTransformer)
    {
        // show all
        $records = Farmexpense::all();
        $collection = new Collection($records, $farmexpenseTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Farmexpense was deleted');
    }

    public function show($id, Manager $fractal, FarmexpenseTransformer $farmexpenseTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $farmexpenseTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Farmexpense::create(Input::all());
        return $this->respond($record->id);
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Farmexpense::create(Input::all());
            return $this->respond($record);
        }

        $record->fill(Input::all())->save();
        return $this->respond($record);
    }
}
