<?php

namespace App\Http\Controllers;

use App\Applicantfinancial;
use App\Transformers\ApplicantfinancialTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class ApplicantfinancialsController extends ApiController
{
    protected $records;

    public function __construct(Applicantfinancial $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, ApplicantfinancialTransformer $applicantfinancialTransformer)
    {
        // show all
        $records = Applicantfinancial::all();
        $collection = new Collection($records, $applicantfinancialTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respondWithCORS($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Applicantfinancial was deleted');
    }

    public function show($id, Manager $fractal, ApplicantfinancialTransformer $applicantfinancialTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $applicantfinancialTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Applicantfinancial::create(Input::all());
        return $this->respondCreated('Applicantfinancial was created');
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->findOrFail($id);

        if(! $record){
            Applicantfinancial::create(Input::all());
            return $this->respondCreated('Applicantfinancial was created');
        }

        $record->fill(Input::all())->save();
        return $this->respondCreated('Applicantfinancial was created');
    }
}
