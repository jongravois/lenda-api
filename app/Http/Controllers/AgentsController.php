<?php

namespace App\Http\Controllers;

use App\Agent;
use App\Transformers\AgentTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class AgentsController extends ApiController
{
    protected $records;

    public function __construct(Agent $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, AgentTransformer $agentTransformer)
    {
        $records = Agent::all();
        $collection = new Collection($records, $agentTransformer);
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

    public function show($id, Manager $fractal, AgentTransformer $agentTransformer)
    {
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $agentTransformer);
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
