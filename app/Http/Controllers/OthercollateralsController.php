<?php

namespace App\Http\Controllers;

use App\Othercollateral;
use App\Transformers\OthercollateralTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class OthercollateralsController extends ApiController
{
    protected $records;

    public function __construct(Othercollateral $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, OthercollateralTransformer $othercollateralTransformer)
    {
        // show all
        $records = Othercollateral::all();
        $collection = new Collection($records, $othercollateralTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Othercollateral was deleted');
    }

    public function show($id, Manager $fractal, OthercollateralTransformer $othercollateralTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $othercollateralTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Othercollateral::create(Input::all());
        return $this->respondCreated('Othercollateral was created');
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Othercollateral::create(Input::all());
            return $this->respondCreated('Othercollateral was created');
        }

        $record->fill(Input::all())->save();
        return $this->respondCreated('Othercollateral was created');
    }
}
