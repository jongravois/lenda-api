<?php

namespace App\Http\Controllers;

use App\Jointventure;
use App\Transformers\JointventureTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class JointventuresController extends ApiController
{
    protected $records;

    public function __construct(Jointventure $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, JointventureTransformer $jointventureTransformer)
    {
        // show all
        $records = Jointventure::all();
        $collection = new Collection($records, $jointventureTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Jointventure was deleted');
    }

    public function show($id, Manager $fractal, JointventureTransformer $jointventureTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $jointventureTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Jointventure::create(Input::all());
        return $this->respondCreated('Jointventure was created');
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Jointventure::create(Input::all());
            return $this->respondCreated('Jointventure was created');
        }

        $record->fill(Input::all())->save();
        return $this->respondCreated('Jointventure was created');
    }
}
