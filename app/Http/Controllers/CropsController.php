<?php

namespace App\Http\Controllers;

use App\Crop;
use App\Transformers\CropTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class CropsController extends ApiController
{
    protected $records;

    public function __construct(Crop $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, CropTransformer $cropTransformer)
    {
        // show all
        $records = Crop::all();
        $collection = new Collection($records, $cropTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respondWithCORS($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('crop was deleted');
    }

    public function show($id, Manager $fractal, CropTransformer $cropTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $cropTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Crop::create(Input::all());
        return $this->respondCreated('Crop was created');
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->findOrFail($id);

        if(! $record){
            Crop::create(Input::all());
            return $this->respondCreated('Crop was created');
        }

        $record->fill(Input::all())->save();
        return $this->respondCreated('Crop was created');
    }
}
