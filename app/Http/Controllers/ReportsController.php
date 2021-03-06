<?php

namespace App\Http\Controllers;

use App\Report;
use App\Transformers\ReportTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class ReportsController extends ApiController
{
    protected $records;

    public function __construct(Report $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, ReportTransformer $reportTransformer)
    {
        // show all
        $records = Report::all();
        $collection = new Collection($records, $reportTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Report was deleted');
    }

    public function show($id, Manager $fractal, ReportTransformer $reportTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $reportTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Report::create(Input::all());
        return $this->respond($record->id);
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Report::create(Input::all());
            return $this->respond($record);
        }

        $record->fill(Input::all())->save();
        return $this->respond($record);
    }
}
