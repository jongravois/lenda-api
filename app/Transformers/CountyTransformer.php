<?php namespace App\Transformers;

use App\County;
use League\Fractal\TransformerAbstract;

class CountyTransformer extends TransformerAbstract {
    public function transform(County $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'state_id' => $item->state_id,
            'location_id' => $item->location_id,
            'county' => $item->county,
            'label' => $item->label,
            'locale' => $item->locale
        ];
    }
}