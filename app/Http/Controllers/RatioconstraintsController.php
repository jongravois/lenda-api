<?php

namespace App\Http\Controllers;

use App\Ratioconstraint;
use App\Transformers\RatioconstraintTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class RatioconstraintsController extends ApiController
{
    protected $records;

    public function __construct(Ratioconstraint $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, RatioconstraintTransformer $ratioconstraintTransformer)
    {
        // show all
        $records = Ratioconstraint::all();
        $collection = new Collection($records, $ratioconstraintTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respondWithCORS($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Ratioconstraint was deleted');
    }

    public function show($id, Manager $fractal, RatioconstraintTransformer $ratioconstraintTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $ratioconstraintTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Ratioconstraint::create(Input::all());
        return $this->respondCreated('Ratioconstraint was created');
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->findOrFail($id);

        if(! $record){
            Ratioconstraint::create(Input::all());
            return $this->respondCreated('Ratioconstraint was created');
        }

        $record->fill(Input::all())->save();
        return $this->respondCreated('Ratioconstraint was created');
    }
}
