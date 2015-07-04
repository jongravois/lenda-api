<?php namespace App\Http\Controllers;

use App\Location;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Transformers\LocationTransformer;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class LocationsController extends ApiController
{
    protected $locations;

    public function __construct(Location $locations)
    {
        $this->locations = $locations;
    }

    public function index(Manager $fractal, LocationTransformer $locationTransformer)
    {
        $locations = Location::with('regions', 'manager')->get();
        $collection = new Collection($locations, $locationTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function create()
    {
        //
    }

    public function store()
    {
        //
    }

    public function show($id, Manager $fractal, LocationTransformer $locationTransformer)
    {
        $location = $this->locations->findOrFail($id);
        $item = new Item($location, $locationTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function edit($id)
    {
        //
    }

    public function update($id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
