<?php

namespace App\Http\Controllers;

use App\Transformers\UploadTransformer;
use App\Upload;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class UploadsController extends ApiController
{
    protected $records;

    public function __construct(Upload $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, UploadTransformer $uploadTransformer)
    {
        $records = Upload::all();
        $collection = new Collection($records, $uploadTransformer);
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

    public function show($id, Manager $fractal, UploadTransformer $uploadTransformer)
    {
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $uploadTransformer);
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
