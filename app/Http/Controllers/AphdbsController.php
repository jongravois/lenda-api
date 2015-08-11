<?php

namespace App\Http\Controllers;

use App\Aphdb;
use App\Transformers\AphdbTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class AphdbsController extends ApiController
{
    protected $records;

    public function __construct(Aphdb $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, AphdbTransformer $aphdbTransformer)
    {
        // show all
        $records = Aphdb::all();
        $collection = new Collection($records, $aphdbTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Aphdb was deleted');
    }

    public function show($id, Manager $fractal, AphdbTransformer $aphdbTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $aphdbTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Aphdb::create(Input::all());
        return $this->respond($record->id);
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Aphdb::create(Input::all());
            return $this->respond($record);
        }

        $record->fill(Input::all())->save();
        return $this->respond($record);
    }
}
