<?php

namespace App\Http\Controllers;

use App\Qbtran;
use App\Transformers\QbtranTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class QbtransController extends ApiController
{
    protected $records;

    public function __construct(Qbtran $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, QbtranTransformer $qbtranTransformer)
    {
        // show all
        $records = Qbtran::all();
        $collection = new Collection($records, $qbtranTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Qbtran was deleted');
    }

    public function show($id, Manager $fractal, QbtranTransformer $qbtranTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $qbtranTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Qbtran::create(Input::all());
        return $this->respond($record->id);
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Qbtran::create(Input::all());
            return $this->respond($record);
        }

        $record->fill(Input::all())->save();
        return $this->respond($record);
    }
}
