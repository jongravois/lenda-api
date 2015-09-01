<?php

namespace App\Http\Controllers;

use App\Transformers\UserTransformer;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class UsersController extends ApiController
{
    protected $records;

    public function __construct(User $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, UserTransformer $userTransformer)
    {
        // show all
        $records = User::with('locations', 'notifications', 'optimizerviewoptions', 'role', 'viewfilters', 'viewoptions')->get();
        $collection = new Collection($records, $userTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('User was deleted');
    }

    public function show($id, Manager $fractal, UserTransformer $userTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $userTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = User::create(Input::all());
        return $this->respond($record->id);
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            User::create(Input::all());
            return $this->respond($record);
        }

        $record->fill(Input::all())->save();
        return $this->respond($record);
    }
}
