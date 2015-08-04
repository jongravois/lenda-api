<?php

namespace App\Http\Controllers;

use App\ResponsibilityRole;
use App\Transformers\ResponsibilityroleTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class ResponsibilityrolesController extends ApiController
{
    protected $records;

    public function __construct(Responsibilityrole $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, ResponsibilityroleTransformer $responsibilityroleTransformer)
    {
        // show all
        $records = Responsibilityrole::all();
        $collection = new Collection($records, $responsibilityroleTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Responsibilityrole was deleted');
    }

    public function show($id, Manager $fractal, ResponsibilityroleTransformer $responsibilityroleTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $responsibilityroleTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Responsibilityrole::create(Input::all());
        return $this->respond($record->id);
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Responsibilityrole::create(Input::all());
            return $this->respond($record);
        }

        $record->fill(Input::all())->save();
        return $this->respond($record);
    }
}
