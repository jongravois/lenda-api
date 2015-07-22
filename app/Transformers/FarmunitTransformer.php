<?php namespace App\Transformers;

use App\Farmunit;
use League\Fractal\TransformerAbstract;

class FarmunitTransformer extends TransformerAbstract {
    public function transform(Farmunit $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'unit_type' => $item->unit_type,
            'farm_id' => $item->farm_id,
            'county_id' => $item->county_id,
            'owner' => $item->owner,
            'share_rent' => (double)$item->share_rent,
            'perm_to_insure' => (boolean)$item->perm_to_insure,
            'IR' => (double)$item->IR,
            'NI' => (double)$item->NI
        ];
    }
}