<?php

namespace App\Http\Controllers;

use App\Activity;
use App\Transformers\ActivityTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class ActivitiesController extends ApiController
{
    protected $records;

    public function __construct(Activity $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, ActivityTransformer $activityTransformer)
    {
        // show all
        $records = Activity::all();
        $collection = new Collection($records, $activityTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Activity was deleted');
    }

    public function show($id, Manager $fractal, ActivityTransformer $activityTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $activityTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Activity::create(Input::all());
        return $this->respond($record->id);
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Activity::create(Input::all());
            return $this->respond($record);
        }

        $record->fill(Input::all())->save();
        return $this->respond($record);
    }

    public function byLoan($id, Manager $fractal, ActivityTransformer $activityTransformer)
    {
        // show all
        $records = Activity::where('loan_id', $id)->get();
        $collection = new Collection($records, $activityTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }
}
