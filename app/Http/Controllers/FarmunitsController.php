<?php

namespace App\Http\Controllers;

use App\Farmunit;
use App\Transformers\FarmunitTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class FarmunitsController extends ApiController
{
    protected $records;

    public function __construct(Farmunit $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, FarmunitTransformer $farmunitTransformer)
    {
        // show all
        $records = Farmunit::with('database.inspols', 'farm', 'practices')->get();
        $collection = new Collection($records, $farmunitTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Farmunit was deleted');
    }

    public function show($id, Manager $fractal, FarmunitTransformer $farmunitTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $farmunitTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Farmunit::create(Input::all());
        return $this->respond($record->id);
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Farmunit::create(Input::all());
            return $this->respond($record);
        }

        $record->fill(Input::all())->save();
        return $this->respond($record);
    }
}
