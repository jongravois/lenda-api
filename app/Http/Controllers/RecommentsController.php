<?php

namespace App\Http\Controllers;

use App\Recomment;
use App\Transformers\RecommentTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class RecommentsController extends ApiController
{
    protected $records;

    public function __construct(Recomment $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, RecommentTransformer $recommentTransformer)
    {
        // show all
        $records = Recomment::all();
        $collection = new Collection($records, $recommentTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Recomment was deleted');
    }

    public function show($id, Manager $fractal, RecommentTransformer $recommentTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $recommentTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Recomment::create(Input::all());
        return $this->respondCreated('Recomment was created');
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Recomment::create(Input::all());
            return $this->respondCreated('Recomment was created');
        }

        $record->fill(Input::all())->save();
        return $this->respondCreated('Recomment was created');
    }
}
