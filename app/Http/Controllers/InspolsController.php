<?php

namespace App\Http\Controllers;

use App\Inspol;
use App\Transformers\InspolTransformer;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class InspolsController extends ApiController
{
    protected $policies;

    public function __construct(Inspol $policies)
    {
        $this->policies = $policies;
    }

    public function index(Manager $fractal, InspolTransformer $inspolTransformer)
    {
        $policies = Inspol::all();
        $collection = new Collection($policies, $inspolTransformer);
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

    public function show($id, Manager $fractal, InspolTransformer $inspolTransformer)
    {
        $policy = $this->policies->findOrFail($id);
        $item = new Item($policy, $inspolTransformer);
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
