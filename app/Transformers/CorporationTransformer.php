<?php namespace App\Transformers;

use App\Corporation;
use League\Fractal\TransformerAbstract;

class CorporationTransformer extends TransformerAbstract {
    public function transform(Corporation $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'corporation' => $item->corporation,
            'ssn' => $item->ssn,
            'address' => $item->address,
            'city' => $item->city,
            'state_id' => $item->state_id,
            'zip' => $item->zip,
            'email' => $item->email,
            'phone' => $item->phone,
            'description' => $item->description,
            'president' => $item->president,
            'vicepresident' => $item->vicepresident,
            'secretary' => $item->secretary,
            'treasurer' => $item->treasurer
        ];
    }
}