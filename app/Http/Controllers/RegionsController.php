<?php namespace App\Http\Controllers;

use App\Region;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Transformers\RegionTransformer;
use App\Http\Requests;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class RegionsController extends ApiController
{
    protected $regions;

    public function __construct(Region $regions)
    {
        $this->regions = $regions;
    }

    public function index(Manager $fractal, RegionTransformer $regionTransformer)
    {
        $regions = Region::with('manager')->get();
        $collection = new Collection($regions, $regionTransformer);
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

    public function show($id, Manager $fractal, RegionTransformer $regionTransformer)
    {
        $region = $this->regions->findOrFail($id);
        $item = new Item($region, $regionTransformer);
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
