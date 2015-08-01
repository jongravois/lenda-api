<?php

namespace App\Http\Controllers;

use App\Committee;
use App\Transformers\CommitteeTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class CommitteesController extends ApiController
{
    protected $records;

    public function __construct(Committee $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, CommitteeTransformer $committeeTransformer)
    {
        // show all
        $records = Committee::all();
        $collection = new Collection($records, $committeeTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Committee was deleted');
    }

    public function show($id, Manager $fractal, CommitteeTransformer $committeeTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $committeeTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Committee::create(Input::all());
        return $this->respond($record->id);
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Committee::create(Input::all());
            return $this->respond($record);
        }

        $record->fill(Input::all())->save();
        return $this->respond($record);
    }
}
