<?php

namespace App\Http\Controllers;

use App\Rescat;
use App\Transformers\RescatTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class RescatsController extends ApiController
{
    protected $records;

    public function __construct(Rescat $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, RescatTransformer $rescatTransformer)
    {
        // show all
        $records = Rescat::all();
        $collection = new Collection($records, $rescatTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Rescat was deleted');
    }

    public function show($id, Manager $fractal, RescatTransformer $rescatTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $rescatTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Rescat::create(Input::all());
        return $this->respond($record->id);
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Rescat::create(Input::all());
            return $this->respond($record);
        }

        $record->fill(Input::all())->save();
        return $this->respond($record);
    }
}
