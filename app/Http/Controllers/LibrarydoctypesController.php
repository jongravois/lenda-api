<?php

namespace App\Http\Controllers;

use App\Librarydoctype;
use App\Transformers\LibrarydoctypeTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class LibrarydoctypesController extends ApiController
{
    protected $records;

    public function __construct(Librarydoctype $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, LibrarydoctypeTransformer $librarydoctypeTransformer)
    {
        // show all
        $records = Librarydoctype::all();
        $collection = new Collection($records, $librarydoctypeTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Librarydoctype was deleted');
    }

    public function show($id, Manager $fractal, LibrarydoctypeTransformer $librarydoctypeTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $librarydoctypeTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Librarydoctype::create(Input::all());
        return $this->respond($record->id);
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Librarydoctype::create(Input::all());
            return $this->respond($record);
        }

        $record->fill(Input::all())->save();
        return $this->respond($record);
    }
}
