<?php

namespace App\Http\Controllers;

use App\Attachment;
use App\Transformers\AttachmentTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class AttachmentsController extends ApiController
{
    protected $records;

    public function __construct(Attachment $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, AttachmentTransformer $attachmentTransformer)
    {
        // show all
        $records = Attachment::all();
        $collection = new Collection($records, $attachmentTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respondWithCORS($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Attachment was deleted');
    }

    public function show($id, Manager $fractal, AttachmentTransformer $attachmentTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $attachmentTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Attachment::create(Input::all());
        return $this->respondCreated('Attachment was created');
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->findOrFail($id);

        if(! $record){
            Attachment::create(Input::all());
            return $this->respondCreated('Attachment was created');
        }

        $record->fill(Input::all())->save();
        return $this->respondCreated('Attachment was created');
    }
}
