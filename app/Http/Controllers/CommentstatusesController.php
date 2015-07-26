<?php

namespace App\Http\Controllers;

use App\Commentstatus;
use App\Transformers\CommentstatusTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class CommentstatusesController extends ApiController
{
    protected $records;

    public function __construct(Commentstatus $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, CommentstatusTransformer $commentstatusTransformer)
    {
        // show all
        $records = Commentstatus::all();
        $collection = new Collection($records, $commentstatusTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Commentstatus was deleted');
    }

    public function show($id, Manager $fractal, CommentstatusTransformer $commentstatusTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $commentstatusTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Commentstatus::create(Input::all());
        return $this->respondCreated('Commentstatus was created');
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Commentstatus::create(Input::all());
            return $this->respondCreated('Commentstatus was created');
        }

        $record->fill(Input::all())->save();
        return $this->respondCreated('Commentstatus was created');
    }
}
