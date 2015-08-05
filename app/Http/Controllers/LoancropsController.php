<?php

namespace App\Http\Controllers;

use App\Loancrop;
use App\Transformers\LoancropTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class LoancropsController extends ApiController
{
    protected $records;

    public function __construct(Loancrop $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, LoancropTransformer $loancropTransformer)
    {
        // show all
        $records = Loancrop::with('crops')->get();
        $collection = new Collection($records, $loancropTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Loancrop was deleted');
    }

    public function show($id, Manager $fractal, LoancropTransformer $loancropTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $loancropTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Loancrop::create(Input::all());
        return $this->respond($record->id);
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Loancrop::create(Input::all());
            return $this->respond($record);
        }

        $record->fill(Input::all())->save();
        return $this->respond($record);
    }
}
