<?php

namespace App\Http\Controllers;

use App\Spendcat;
use App\Transformers\SpendcatTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class SpendcatsController extends ApiController
{
    protected $records;

    public function __construct(Spendcat $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, SpendcatTransformer $spendcatTransformer)
    {
        // show all
        $records = Spendcat::all();
        $collection = new Collection($records, $spendcatTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Spendcat was deleted');
    }

    public function show($id, Manager $fractal, SpendcatTransformer $spendcatTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $spendcatTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Spendcat::create(Input::all());
        return $this->respond($record->id);
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Spendcat::create(Input::all());
            return $this->respond($record);
        }

        $record->fill(Input::all())->save();
        return $this->respond($record);
    }
}
