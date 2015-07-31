<?php

namespace App\Http\Controllers;

use App\CommentUser;
use App\Transformers\CommentUserTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class CommentUsersController extends ApiController
{
    protected $records;

    public function __construct(CommentUser $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, CommentUserTransformer $commentUserTransformer)
    {
        // show all
        $records = CommentUser::all();
        $collection = new Collection($records, $commentUserTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('CommentUser was deleted');
    }

    public function show($id, Manager $fractal, CommentUserTransformer $commentUserTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $commentUserTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = CommentUser::create(Input::all());
        return $this->respondCreated('CommentUser was created');
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            CommentUser::create(Input::all());
            return $this->respondCreated('CommentUser was created');
        }

        $record->fill(Input::all())->save();
        return $this->respondCreated('CommentUser was created');
    }
}
