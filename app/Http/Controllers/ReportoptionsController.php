<?php

namespace App\Http\Controllers;

use App\Reportoption;
use App\Transformers\ReportoptionTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class ReportoptionsController extends ApiController
{
    protected $records;

    public function __construct(Reportoption $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, ReportoptionTransformer $reportoptionTransformer)
    {
        // show all
        $records = Reportoption::all();
        $collection = new Collection($records, $reportoptionTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Reportoption was deleted');
    }

    public function show($id, Manager $fractal, ReportoptionTransformer $reportoptionTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $reportoptionTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Reportoption::create(Input::all());
        return $this->respond($record->id);
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Reportoption::create(Input::all());
            return $this->respond($record);
        }

        $record->fill(Input::all())->save();
        return $this->respond($record);
    }
}
