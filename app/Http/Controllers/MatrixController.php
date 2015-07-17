<?php

namespace App\Http\Controllers;

use App\Matrix;
use App\Transformers\MatrixTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class MatrixController extends ApiController
{
    protected $records;

    public function __construct(Matrix $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, MatrixTransformer $matrixTransformer)
    {
        // show all
        $records = Matrix::all();
        $collection = new Collection($records, $matrixTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respondWithCORS($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Matrix was deleted');
    }

    public function show($id, Manager $fractal, MatrixTransformer $matrixTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $matrixTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Matrix::create(Input::all());
        return $this->respondCreated('Matrix was created');
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->findOrFail($id);

        if(! $record){
            Matrix::create(Input::all());
            return $this->respondCreated('Matrix was created');
        }

        $record->fill(Input::all())->save();
        return $this->respondCreated('Matrix was created');
    }
}
