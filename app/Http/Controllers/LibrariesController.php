<?php

namespace App\Http\Controllers;

use App\Library;
use App\Transformers\LibraryTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class LibrariesController extends ApiController
{
    protected $records;

    public function __construct(Library $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, LibraryTransformer $libraryTransformer)
    {
        // show all
        $records = Library::with('distributors', 'doctypes', 'fileclasses', 'filetypes', 'states')->get();
        $collection = new Collection($records, $libraryTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Library was deleted');
    }

    public function show($id, Manager $fractal, LibraryTransformer $libraryTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $libraryTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Library::create(Input::all());
        return $this->respond($record->id);
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Library::create(Input::all());
            return $this->respond($record);
        }

        $record->fill(Input::all())->save();
        return $this->respond($record);
    }
}
