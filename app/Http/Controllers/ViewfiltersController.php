<?php

namespace App\Http\Controllers;

use App\Transformers\ViewfilterTransformer;
use App\Viewfilter;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class ViewfiltersController extends ApiController
{
    protected $records;

    public function __construct(Viewfilter $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, ViewfilterTransformer $viewfilterTransformer)
    {
        // show all
        $records = Viewfilter::all();
        $collection = new Collection($records, $viewfilterTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Viewfilter was deleted');
    }

    public function show($id, Manager $fractal, ViewfilterTransformer $viewfilterTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $viewfilterTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Viewfilter::create(Input::all());
        return $this->respond($record->id);
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Viewfilter::create(Input::all());
            return $this->respond($record);
        }

        $record->fill(Input::all())->save();
        return $this->respond($record);
    }
}
