<?php

namespace App\Http\Controllers;

use App\Indirectcropincome;
use App\Transformers\IndirectcropincomeTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class IndirectcropincomesController extends ApiController
{
    protected $records;

    public function __construct(Indirectcropincome $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, IndirectcropincomeTransformer $indirectcropincomeTransformer)
    {
        // show all
        $records = Indirectcropincome::all();
        $collection = new Collection($records, $indirectcropincomeTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Indirectcropincome was deleted');
    }

    public function show($id, Manager $fractal, IndirectcropincomeTransformer $indirectcropincomeTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $indirectcropincomeTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Indirectcropincome::create(Input::all());
        return $this->respond($record->id);
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Indirectcropincome::create(Input::all());
            return $this->respond($record);
        }

        $record->fill(Input::all())->save();
        return $this->respond($record);
    }
}
