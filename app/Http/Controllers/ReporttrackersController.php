<?php

namespace App\Http\Controllers;

use App\Reporttracker;
use App\Transformers\ReporttrackerTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class ReporttrackersController extends ApiController
{
    protected $records;

    public function __construct(Reporttracker $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, ReporttrackerTransformer $reporttrackerTransformer)
    {
        // show all
        $records = Reporttracker::with(['report' => function($query) {
            $query->where('is_required', '1');
        }], 'user.role')->get();
        $collection = new Collection($records, $reporttrackerTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Reporttracker was deleted');
    }

    public function show($id, Manager $fractal, ReporttrackerTransformer $reporttrackerTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $reporttrackerTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Reporttracker::create(Input::all());
        return $this->respond($record->id);
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Reporttracker::create(Input::all());
            return $this->respond($record);
        }

        $record->fill(Input::all())->save();
        return $this->respond($record);
    }
}
