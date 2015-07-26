<?php

namespace App\Http\Controllers;

use App\Addendumfinancial;
use App\Transformers\AddendumfinancialTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class AddendumfinancialsController extends ApiController
{
    protected $records;

    public function __construct(Addendumfinancial $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, AddendumfinancialTransformer $addendumfinancialTransformer)
    {
        // show all
        $records = Addendumfinancial::all();
        $collection = new Collection($records, $addendumfinancialTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Addendumfinancial was deleted');
    }

    public function show($id, Manager $fractal, AddendumfinancialTransformer $addendumfinancialTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $addendumfinancialTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Addendumfinancial::create(Input::all());
        return $this->respondCreated('Addendumfinancial was created');
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Addendumfinancial::create(Input::all());
            return $this->respondCreated('Addendumfinancial was created');
        }

        $record->fill(Input::all())->save();
        return $this->respondCreated('Addendumfinancial was created');
    }
}
