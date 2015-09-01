<?php

namespace App\Http\Controllers;

use App\Buyer;
use App\Transformers\BuyerTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class BuyersController extends ApiController
{
    protected $records;

    public function __construct(Buyer $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, BuyerTransformer $buyerTransformer)
    {
        // show all
        $records = Buyer::all();
        $collection = new Collection($records, $buyerTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Buyer was deleted');
    }

    public function show($id, Manager $fractal, BuyerTransformer $buyerTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $buyerTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Buyer::create(Input::all());
        return $this->respond($record->id);
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Buyer::create(Input::all());
            return $this->respond($record);
        }

        $record->fill(Input::all())->save();
        return $this->respond($record);
    }
}
