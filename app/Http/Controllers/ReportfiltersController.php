<?php

namespace App\Http\Controllers;

use App\Reportfilter;
use App\Transformers\ReportfilterTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class ReportfiltersController extends ApiController
{
    protected $records;

    public function __construct(Reportfilter $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, ReportfilterTransformer $reportfilterTransformer)
    {
        // show all
        $records = Reportfilter::all();
        $collection = new Collection($records, $reportfilterTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respondWithCORS($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Reportfilter was deleted');
    }

    public function show($id, Manager $fractal, ReportfilterTransformer $reportfilterTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $reportfilterTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Reportfilter::create(Input::all());
        return $this->respondCreated('Reportfilter was created');
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->findOrFail($id);

        if(! $record){
            Reportfilter::create(Input::all());
            return $this->respondCreated('Reportfilter was created');
        }

        $record->fill(Input::all())->save();
        return $this->respondCreated('Reportfilter was created');
    }
}
