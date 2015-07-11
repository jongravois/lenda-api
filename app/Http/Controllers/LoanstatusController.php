<?php

namespace App\Http\Controllers;

use App\Loanstatus;
use App\Transformers\LoanstatusTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class LoanstatusController extends ApiController
{
    protected $records;

    public function __construct(Loanstatus $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, LoanstatusTransformer $loanstatusTransformer)
    {
        $records = Loanstatus::all();
        $collection = new Collection($records, $loanstatusTransformer);
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

    public function show($id, Manager $fractal, LoanstatusTransformer $loanstatusTransformer)
    {
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $loanstatusTransformer);
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
