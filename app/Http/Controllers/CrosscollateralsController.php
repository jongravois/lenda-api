<?php

namespace App\Http\Controllers;

use App\Crosscollateral;
use App\Transformers\CrosscollateralTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class CrosscollateralsController extends ApiController
{
    protected $records;

    public function __construct(Crosscollateral $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, CrosscollateralTransformer $crosscollateralTransformer)
    {
        // show all
        $records = Crosscollateral::all();
        $collection = new Collection($records, $crosscollateralTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Crosscollateral was deleted');
    }

    public function show($id, Manager $fractal, CrosscollateralTransformer $crosscollateralTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $crosscollateralTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Crosscollateral::create(Input::all());
        return $this->respondCreated('Crosscollateral was created');
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Crosscollateral::create(Input::all());
            return $this->respondCreated('Crosscollateral was created');
        }

        $record->fill(Input::all())->save();
        return $this->respondCreated('Crosscollateral was created');
    }
}
