<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Transformers\CommentTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class CommentsController extends ApiController
{
    protected $records;

    public function __construct(Comment $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, CommentTransformer $commentTransformer)
    {
        // show all
        $records = Comment::all();
        $collection = new Collection($records, $commentTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respondWithCORS($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Comment was deleted');
    }

    public function show($id, Manager $fractal, CommentTransformer $commentTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $commentTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Comment::create(Input::all());
        return $this->respondCreated('Comment was created');
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->findOrFail($id);

        if(! $record){
            Comment::create(Input::all());
            return $this->respondCreated('Comment was created');
        }

        $record->fill(Input::all())->save();
        return $this->respondCreated('Comment was created');
    }
}
