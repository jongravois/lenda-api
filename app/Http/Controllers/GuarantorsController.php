<?php

namespace App\Http\Controllers;

use App\Guarantor;
use App\Transformers\GuarantorTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class GuarantorsController extends ApiController
{
    protected $records;

    public function __construct(Guarantor $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, GuarantorTransformer $guarantorTransformer)
    {
        // show all
        $records = Guarantor::all();
        $collection = new Collection($records, $guarantorTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respondWithCORS($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Guarantor was deleted');
    }

    public function show($id, Manager $fractal, GuarantorTransformer $guarantorTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $guarantorTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Guarantor::create(Input::all());
        return $this->respondCreated('Guarantor was created');
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->findOrFail($id);

        if(! $record){
            Guarantor::create(Input::all());
            return $this->respondCreated('Guarantor was created');
        }

        $record->fill(Input::all())->save();
        return $this->respondCreated('Guarantor was created');
    }
}
