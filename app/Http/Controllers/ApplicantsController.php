<?php

namespace App\Http\Controllers;

use App\Applicant;
use App\Transformers\ApplicantTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class ApplicantsController extends ApiController
{
    protected $records;

    public function __construct(Applicant $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, ApplicantTransformer $applicantTransformer)
    {
        // show all
        $records = Applicant::all();
        $collection = new Collection($records, $applicantTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Applicant was deleted');
    }

    public function show($id, Manager $fractal, ApplicantTransformer $applicantTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $applicantTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Applicant::create(Input::all());
        return $this->respond($record->id);
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Applicant::create(Input::all());
            return $this->respond($record);
        }

        $record->fill(Input::all())->save();
        return $this->respond($record);
    }
}
