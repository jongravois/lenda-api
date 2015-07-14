<?php

namespace App\Http\Controllers;

use App\Systemic;
use App\Transformers\SystemicTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class SystemicsController extends ApiController
{
    protected $records;

    public function __construct(Systemic $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, SystemicTransformer $systemicTransformer)
    {
        // show all
        $records = Systemic::all();
        $collection = new Collection($records, $systemicTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respondWithCORS($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Systemic was deleted');
    }

    public function show($id, Manager $fractal, SystemicTransformer $systemicTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $systemicTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Systemic::create(Input::all());
        return $this->respondCreated('Systemic was created');
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->findOrFail($id);

        if(! $record){
            Systemic::create(Input::all());
            return $this->respondCreated('Systemic was created');
        }

        $record->fill(Input::all())->save();
        return $this->respondCreated('Systemic was created');
    }
}
