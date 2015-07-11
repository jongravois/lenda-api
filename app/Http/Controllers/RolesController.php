<?php

namespace App\Http\Controllers;

use App\Role;
use App\Transformers\RoleTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class RolesController extends ApiController
{
    protected $records;

    public function __construct(Role $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, RoleTransformer $roleTransformer)
    {
        // show all
        $records = Role::all();
        $collection = new Collection($records, $roleTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respondWithCORS($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Role was deleted');
    }

    public function show($id, Manager $fractal, RoleTransformer $roleTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $roleTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Role::create(Input::all());
        return $this->respondCreated('Role was created');
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->findOrFail($id);

        if(! $record){
            Role::create(Input::all());
            return $this->respondCreated('Role was created');
        }

        $record->fill(Input::all())->save();
        return $this->respondCreated('Role was created');
    }
}
