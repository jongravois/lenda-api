<?php

namespace App\Http\Controllers;

use App\Tabstatus;
use App\Transformers\TabstatusTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class TabstatusesController extends ApiController
{
    protected $records;

    public function __construct(Tabstatus $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, TabstatusTransformer $tabstatusTransformer)
    {
        // show all
        $records = Tabstatus::all();
        $collection = new Collection($records, $tabstatusTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Tabstatus was deleted');
    }

    public function show($id, Manager $fractal, TabstatusTransformer $tabstatusTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $tabstatusTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Tabstatus::create(Input::all());
        return $this->respond($record->id);
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Tabstatus::create(Input::all());
            return $this->respond($record);
        }

        $record->fill(Input::all())->save();
        return $this->respond($record);
    }
}
