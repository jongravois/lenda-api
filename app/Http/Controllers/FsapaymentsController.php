<?php

namespace App\Http\Controllers;

use App\Fsapayment;
use App\Transformers\FsapaymentTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class FsapaymentsController extends ApiController
{
    protected $records;

    public function __construct(Fsapayment $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, FsapaymentTransformer $fsapaymentTransformer)
    {
        // show all
        $records = Fsapayment::with('farms.county.state')->get();
        $collection = new Collection($records, $fsapaymentTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Fsapayment was deleted');
    }

    public function show($id, Manager $fractal, FsapaymentTransformer $fsapaymentTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $fsapaymentTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Fsapayment::create(Input::all());
        return $this->respond($record->id);
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Fsapayment::create(Input::all());
            return $this->respond($record);
        }

        $record->fill(Input::all())->save();
        return $this->respond($record);
    }
}
