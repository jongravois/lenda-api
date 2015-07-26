<?php

namespace App\Http\Controllers;

use App\Globvar;
use App\Transformers\GlobvarTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class GlobvarsController extends ApiController
{
    protected $records;

    public function __construct(Globvar $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, GlobvarTransformer $globvarTransformer)
    {
        // show all
        $records = Globvar::all();
        $collection = new Collection($records, $globvarTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Globvar was deleted');
    }

    public function show($id, Manager $fractal, GlobvarTransformer $globvarTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $globvarTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Globvar::create(Input::all());
        return $this->respondCreated('Globvar was created');
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Globvar::create(Input::all());
            return $this->respondCreated('Globvar was created');
        }

        $record->fill(Input::all())->save();
        return $this->respondCreated('Globvar was created');
    }
}
