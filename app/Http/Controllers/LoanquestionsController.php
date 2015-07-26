<?php

namespace App\Http\Controllers;

use App\Loanquestion;
use App\Transformers\LoanquestionTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class LoanquestionsController extends ApiController
{
    protected $records;

    public function __construct(Loanquestion $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, LoanquestionTransformer $loanquestionTransformer)
    {
        // show all
        $records = Loanquestion::all();
        $collection = new Collection($records, $loanquestionTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Loanquestion was deleted');
    }

    public function show($id, Manager $fractal, LoanquestionTransformer $loanquestionTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $loanquestionTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Loanquestion::create(Input::all());
        return $this->respondCreated('Loanquestion was created');
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Loanquestion::create(Input::all());
            return $this->respondCreated('Loanquestion was created');
        }

        $record->fill(Input::all())->save();
        return $this->respondCreated('Loanquestion was created');
    }
}
