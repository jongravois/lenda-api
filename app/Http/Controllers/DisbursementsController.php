<?php

namespace App\Http\Controllers;

use App\Disbursement;
use App\Transformers\DisbursementTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class DisbursementsController extends ApiController
{
    protected $records;

    public function __construct(Disbursement $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, DisbursementTransformer $disbursementTransformer)
    {
        // show all
        $records = Disbursement::all();
        $collection = new Collection($records, $disbursementTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Disbursement was deleted');
    }

    public function show($id, Manager $fractal, DisbursementTransformer $disbursementTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $disbursementTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Disbursement::create(Input::all());
        return $this->respondCreated('Disbursement was created');
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Disbursement::create(Input::all());
            return $this->respondCreated('Disbursement was created');
        }

        $record->fill(Input::all())->save();
        return $this->respondCreated('Disbursement was created');
    }
}
