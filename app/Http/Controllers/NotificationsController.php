<?php

namespace App\Http\Controllers;

use App\Notification;
use App\Transformers\NotificationTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class NotificationsController extends ApiController
{
    protected $records;

    public function __construct(Notification $records)
    {
        $this->records = $records;
    }

    public function index(Manager $fractal, NotificationTransformer $notificationTransformer)
    {
        // show all
        $records = Notification::all();
        $collection = new Collection($records, $notificationTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Notification was deleted');
    }

    public function show($id, Manager $fractal, NotificationTransformer $notificationTransformer)
    {
        //show single
        $record = $this->records->findOrFail($id);
        $item = new Item($record, $notificationTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function store()
    {
        // insert new
        $record = Notification::create(Input::all());
        return $this->respond($record->id);
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Notification::create(Input::all());
            return $this->respond($record);
        }

        $record->fill(Input::all())->save();
        return $this->respond($record);
    }
}
