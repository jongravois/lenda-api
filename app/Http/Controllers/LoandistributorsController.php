<?php

namespace App\Http\Controllers;

use App\Loandistributor;
use App\Transformers\LoandistributorTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class LoandistributorsController extends ApiController
{
    protected $records;

    public function __construct(Loandistributor $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, LoandistributorTransformer $loandistributorTransformer)
    {
        // show all
        $records = Loandistributor::all();
        $collection = new Collection($records, $loandistributorTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Loandistributor was deleted');
    }

    public function show($id, Manager $fractal, LoandistributorTransformer $loandistributorTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $loandistributorTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Loandistributor::create(Input::all());
        return $this->respond($record->id);
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Loandistributor::create(Input::all());
            return $this->respond($record);
        }

        $record->fill(Input::all())->save();
        return $this->respond($record);
    }
}
