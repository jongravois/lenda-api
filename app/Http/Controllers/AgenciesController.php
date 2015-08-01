<?php

namespace App\Http\Controllers;

use App\Agency;
use App\Transformers\AgencyTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class AgenciesController extends ApiController
{
    protected $records;

    public function __construct(Agency $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, AgencyTransformer $agencyTransformer)
    {
        // show all
        $records = Agency::with('agents')->get();
        $collection = new Collection($records, $agencyTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Agency was deleted');
    }

    public function show($id, Manager $fractal, AgencyTransformer $agencyTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $agencyTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Agency::create(Input::all());
        return $this->respond($record->id);
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Agency::create(Input::all());
            return $this->respond($record);
        }

        $record->fill(Input::all())->save();
        return $this->respond($record);
    }
}
