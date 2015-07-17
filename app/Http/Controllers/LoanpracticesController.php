<?php

namespace App\Http\Controllers;

use App\Loanpractice;
use App\Transformers\LoanpracticeTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class LoanpracticesController extends ApiController
{
    protected $records;

    public function __construct(Loanpractice $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, LoanpracticeTransformer $loanpracticeTransformer)
    {
        // show all
        $records = Loanpractice::all();
        $collection = new Collection($records, $loanpracticeTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respondWithCORS($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Loanpractice was deleted');
    }

    public function show($id, Manager $fractal, LoanpracticeTransformer $loanpracticeTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $loanpracticeTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Loanpractice::create(Input::all());
        return $this->respondCreated('Loanpractice was created');
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->findOrFail($id);

        if(! $record){
            Loanpractice::create(Input::all());
            return $this->respondCreated('Loanpractice was created');
        }

        $record->fill(Input::all())->save();
        return $this->respondCreated('Loanpractice was created');
    }
}
