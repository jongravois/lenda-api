<?php

namespace App\Http\Controllers;

use App\Closingdoc;
use App\Transformers\ClosingdocTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class ClosingdocsController extends ApiController
{
    protected $records;

    public function __construct(Closingdoc $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, ClosingdocTransformer $closingdocTransformer)
    {
        // show all
        $records = Closingdoc::all();
        $collection = new Collection($records, $closingdocTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Closingdoc was deleted');
    }

    public function show($id, Manager $fractal, ClosingdocTransformer $closingdocTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $closingdocTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Closingdoc::create(Input::all());
        return $this->respond($record->id);
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Closingdoc::create(Input::all());
            return $this->respond($record);
        }

        $record->fill(Input::all())->save();
        return $this->respond($record);
    }
}
