<?php

namespace App\Http\Controllers;

use App\Requireddocument;
use App\Transformers\RequireddocumentTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class RequireddocumentsController extends ApiController
{
    protected $records;

    public function __construct(Requireddocument $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, RequireddocumentTransformer $requireddocumentTransformer)
    {
        // show all
        $records = Requireddocument::all();
        $collection = new Collection($records, $requireddocumentTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Requireddocument was deleted');
    }

    public function show($id, Manager $fractal, RequireddocumentTransformer $requireddocumentTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $requireddocumentTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Requireddocument::create(Input::all());
        return $this->respond($record->id);
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Requireddocument::create(Input::all());
            return $this->respond($record);
        }

        $record->fill(Input::all())->save();
        return $this->respond($record);
    }
}
