<?php

namespace App\Http\Controllers;

use App\Farmpractice;
use App\Transformers\FarmpracticeTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class FarmpracticesController extends ApiController
{
    protected $records;

    public function __construct(Farmpractice $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, FarmpracticeTransformer $farmpracticeTransformer)
    {
        // show all
        $records = Farmpractice::all();
        $collection = new Collection($records, $farmpracticeTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Farmpractice was deleted');
    }

    public function show($id, Manager $fractal, FarmpracticeTransformer $farmpracticeTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $farmpracticeTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Farmpractice::create(Input::all());
        return $this->respond($record->id);
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Farmpractice::create(Input::all());
            return $this->respond($record);
        }

        $record->fill(Input::all())->save();
        return $this->respond($record);
    }
}
