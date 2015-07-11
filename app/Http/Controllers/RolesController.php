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
        $records = Role::all();
        $collection = new Collection($records, $roleTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function create()
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function show($id, Manager $fractal, RoleTransformer $roleTransformer)
    {
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $roleTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        //
    }

    public function update($id)
    {
        //
    }
}
