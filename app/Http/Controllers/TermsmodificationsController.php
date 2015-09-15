<?php

namespace App\Http\Controllers;

use App\Termsmodification;
use App\Transformers\TermsmodificationTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class TermsmodificationsController extends ApiController
{
    protected $records;

    public function __construct(Termsmodification $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, TermsmodificationTransformer $termsmodificationTransformer)
    {
        // show all
        $records = Termsmodification::all();
        $collection = new Collection($records, $termsmodificationTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Termsmodification was deleted');
    }

    public function show($id, Manager $fractal, TermsmodificationTransformer $termsmodificationTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $termsmodificationTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Termsmodification::create(Input::all());
        return $this->respond($record->id);
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Termsmodification::create(Input::all());
            return $this->respond($record);
        }

        $record->fill(Input::all())->save();
        return $this->respond($record);
    }
}
