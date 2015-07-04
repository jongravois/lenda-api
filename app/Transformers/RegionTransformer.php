<?php namespace App\Transformers;

use App\Region;
use League\Fractal\TransformerAbstract;

class RegionTransformer extends TransformerAbstract {
    public function transform(Region $region)
    {
        //return $region;

        return [
            'id' => $region->id,
            'region' => $region->region,
            'manager_id' => (integer) $region->manager_id,
            'manager' => $region->manager->name
        ];
    }
}