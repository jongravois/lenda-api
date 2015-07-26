<?php

namespace App\Http\Controllers;

use App\Admingrader;
use App\Transformers\AdmingraderTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class AdmingradersController extends ApiController
{
    protected $records;

    public function __construct(Admingrader $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, AdmingraderTransformer $admingraderTransformer)
    {
        // show all
        $records = Admingrader::all();
        $collection = new Collection($records, $admingraderTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Admingrader was deleted');
    }

    public function show($id, Manager $fractal, AdmingraderTransformer $admingraderTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $admingraderTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Admingrader::create(Input::all());
        return $this->respondCreated('Admingrader was created');
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Admingrader::create(Input::all());
            return $this->respondCreated('Admingrader was created');
        }

        $record->fill(Input::all())->save();
        return $this->respondCreated('Admingrader was created');
    }
}
