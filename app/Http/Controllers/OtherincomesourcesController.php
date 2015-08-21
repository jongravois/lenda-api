<?php

namespace App\Http\Controllers;

use App\Otherincomesource;
use App\Transformers\OtherincomesourceTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class OtherincomesourcesController extends ApiController
{
    protected $records;

    public function __construct(Otherincomesource $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, OtherincomesourceTransformer $otherincomesourceTransformer)
    {
        // show all
        $records = Otherincomesource::all();
        $collection = new Collection($records, $otherincomesourceTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Otherincomesource was deleted');
    }

    public function show($id, Manager $fractal, OtherincomesourceTransformer $otherincomesourceTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $otherincomesourceTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Otherincomesource::create(Input::all());
        return $this->respond($record->id);
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Otherincomesource::create(Input::all());
            return $this->respond($record);
        }

        $record->fill(Input::all())->save();
        return $this->respond($record);
    }
}
