<?php

namespace App\Http\Controllers;

use App\Exception;
use App\Transformers\ExceptionTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class ExceptionsController extends ApiController
{
    protected $records;

    public function __construct(Exception $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, ExceptionTransformer $exceptionTransformer)
    {
        // show all
        $records = Exception::all();
        $collection = new Collection($records, $exceptionTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Exception was deleted');
    }

    public function show($id, Manager $fractal, ExceptionTransformer $exceptionTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $exceptionTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Exception::create(Input::all());
        return $this->respondCreated('Exception was created');
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Exception::create(Input::all());
            return $this->respondCreated('Exception was created');
        }

        $record->fill(Input::all())->save();
        return $this->respondCreated('Exception was created');
    }
}
