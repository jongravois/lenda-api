<?php namespace App\Transformers;

use App\Location;
use League\Fractal\TransformerAbstract;

class LocationTransformer extends TransformerAbstract {
    public function transform(Location $location)
    {
        //return $location;
        return [
            'id' => $location->id,
            'region_id' => $location->region_id,
            'region' => $location->regions->region,
            'manager_id' => $location->manager_id,
            'manager' => $location->manager->name,
            'location' => $location->location,
            'loc_abr' => $location->loc_abr,
            'address' => $location->address,
            'city' => $location->city,
            'state' => $location->state,
            'zip' => $location->zip,
            'phone' => $location->phone
        ];
    }
}