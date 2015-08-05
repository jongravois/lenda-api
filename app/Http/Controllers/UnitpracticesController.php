<?php

namespace App\Http\Controllers;

use App\Transformers\UnitpracticeTransformer;
use App\Unitpractice;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class UnitpracticesController extends ApiController
{
    protected $records;

    public function __construct(Unitpractice $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, UnitpracticeTransformer $unitpracticeTransformer)
    {
        // show all
        $records = Unitpractice::all();
        $collection = new Collection($records, $unitpracticeTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Unitpractice was deleted');
    }

    public function show($id, Manager $fractal, UnitpracticeTransformer $unitpracticeTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $unitpracticeTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Unitpractice::create(Input::all());
        return $this->respond($record->id);
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Unitpractice::create(Input::all());
            return $this->respond($record);
        }

        $record->fill(Input::all())->save();
        return $this->respond($record);
    }
}
