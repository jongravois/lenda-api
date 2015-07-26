<?php

namespace App\Http\Controllers;

use App\Committeespec;
use App\Transformers\CommitteespecTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class CommitteespecsController extends ApiController
{
    protected $records;

    public function __construct(Committeespec $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, CommitteespecTransformer $committeespecTransformer)
    {
        // show all
        $records = Committeespec::all();
        $collection = new Collection($records, $committeespecTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('committeespec was deleted');
    }

    public function show($id, Manager $fractal, CommitteespecTransformer $committeespecTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $committeespecTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Committeespec::create(Input::all());
        return $this->respondCreated('Committeespec was created');
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Committeespec::create(Input::all());
            return $this->respondCreated('Committeespec was created');
        }

        $record->fill(Input::all())->save();
        return $this->respondCreated('Committeespec was created');
    }
}
