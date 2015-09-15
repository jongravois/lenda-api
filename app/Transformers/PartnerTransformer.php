<?php namespace App\Transformers;

use App\Partner;
use League\Fractal\TransformerAbstract;

class PartnerTransformer extends TransformerAbstract {
    public function transform(Partner $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'partner' => $item->partner,
            'title' => $item->title,
            'location' => $item->location,
            'email' => $item->email,
            'phone' => $item->phone
        ];
    }
}   