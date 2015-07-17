<?php

namespace App\Http\Controllers;

use App\Addendumloan;
use App\Transformers\AddendumloanTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class AddendumloansController extends ApiController
{
    protected $records;

    public function __construct(Addendumloan $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, AddendumloanTransformer $addendumloanTransformer)
    {
        // show all
        $records = Addendumloan::all();
        $collection = new Collection($records, $addendumloanTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respondWithCORS($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Addendumloan was deleted');
    }

    public function show($id, Manager $fractal, AddendumloanTransformer $addendumloanTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $addendumloanTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Addendumloan::create(Input::all());
        return $this->respondCreated('Addendumloan was created');
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->findOrFail($id);

        if(! $record){
            Addendumloan::create(Input::all());
            return $this->respondCreated('Addendumloan was created');
        }

        $record->fill(Input::all())->save();
        return $this->respondCreated('Addendumloan was created');
    }
}
