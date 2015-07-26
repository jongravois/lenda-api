<?php

namespace App\Http\Controllers;

use App\Instype;
use App\Transformers\InstypeTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class InstypesController extends ApiController
{
    protected $records;

    public function __construct(Instype $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, InstypeTransformer $instypeTransformer)
    {
        // show all
        $records = Instype::all();
        $collection = new Collection($records, $instypeTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Instype was deleted');
    }

    public function show($id, Manager $fractal, InstypeTransformer $instypeTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $instypeTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Instype::create(Input::all());
        return $this->respondCreated('Instype was created');
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Instype::create(Input::all());
            return $this->respondCreated('Instype was created');
        }

        $record->fill(Input::all())->save();
        return $this->respondCreated('Instype was created');
    }
}
