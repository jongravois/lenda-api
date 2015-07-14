<?php

namespace App\Http\Controllers;

use App\Partner;
use App\Transformers\PartnerTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class PartnersController extends ApiController
{
    protected $records;

    public function __construct(Partner $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, PartnerTransformer $partnerTransformer)
    {
        // show all
        $records = Partner::all();
        $collection = new Collection($records, $partnerTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respondWithCORS($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Partner was deleted');
    }

    public function show($id, Manager $fractal, PartnerTransformer $partnerTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $partnerTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Partner::create(Input::all());
        return $this->respondCreated('Partner was created');
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->findOrFail($id);

        if(! $record){
            Partner::create(Input::all());
            return $this->respondCreated('Partner was created');
        }

        $record->fill(Input::all())->save();
        return $this->respondCreated('Partner was created');
    }
}
