<?php

namespace App\Http\Controllers;

use App\Priorlien;
use App\Transformers\PriorlienTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class PriorliensController extends ApiController
{
    protected $records;

    public function __construct(Priorlien $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, PriorlienTransformer $priorlienTransformer)
    {
        // show all
        $records = Priorlien::all();
        $collection = new Collection($records, $priorlienTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respondWithCORS($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Priorlien was deleted');
    }

    public function show($id, Manager $fractal, PriorlienTransformer $priorlienTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $priorlienTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Priorlien::create(Input::all());
        return $this->respondCreated('Priorlien was created');
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->findOrFail($id);

        if(! $record){
            Priorlien::create(Input::all());
            return $this->respondCreated('Priorlien was created');
        }

        $record->fill(Input::all())->save();
        return $this->respondCreated('Priorlien was created');
    }
}
