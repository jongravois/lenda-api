<?php

namespace App\Http\Controllers;

use App\Agent;
use App\Transformers\AgentTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
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
        // show all
        $records = Agent::all();
        $collection = new Collection($records, $agentTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Agent was deleted');
    }

    public function show($id, Manager $fractal, AgentTransformer $agentTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $agentTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Agent::create(Input::all());
        return $this->respondCreated('Agent was created');
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Agent::create(Input::all());
            return $this->respondCreated('Agent was created');
        }

        $record->fill(Input::all())->save();
        return $this->respondCreated('Agent was created');
    }
}
