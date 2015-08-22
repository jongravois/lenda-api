<?php

namespace App\Http\Controllers;

use App\Loandisc;
use App\Transformers\LoandiscTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class LoandiscsController extends ApiController
{
    protected $records;

    public function __construct(Loandisc $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, LoandiscTransformer $loandiscTransformer)
    {
        // show all
        $records = Loandisc::all();
        $collection = new Collection($records, $loandiscTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Loandisc was deleted');
    }

    public function show($id, Manager $fractal, LoandiscTransformer $loandiscTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $loandiscTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Loandisc::create(Input::all());
        return $this->respond($record->id);
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Loandisc::create(Input::all());
            return $this->respond($record);
        }

        $record->fill(Input::all())->save();
        return $this->respond($record);
    }
}
