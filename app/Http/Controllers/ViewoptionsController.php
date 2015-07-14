<?php

namespace App\Http\Controllers;

use App\Transformers\ViewoptionTransformer;
use App\Viewoption;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class ViewoptionsController extends ApiController
{
    protected $records;

    public function __construct(Viewoption $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, ViewoptionTransformer $viewoptionTransformer)
    {
        // show all
        $records = Viewoption::all();
        $collection = new Collection($records, $viewoptionTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respondWithCORS($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Viewoption was deleted');
    }

    public function show($id, Manager $fractal, ViewoptionTransformer $viewoptionTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $viewoptionTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Viewoption::create(Input::all());
        return $this->respondCreated('Viewoption was created');
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->findOrFail($id);

        if(! $record){
            Viewoption::create(Input::all());
            return $this->respondCreated('Viewoption was created');
        }

        $record->fill(Input::all())->save();
        return $this->respondCreated('Viewoption was created');
    }
}
