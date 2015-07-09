<?php namespace App\Transformers;

use App\Agency;
use League\Fractal\TransformerAbstract;

class AgencyTransformer extends TransformerAbstract {
    public function transform(Agency $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'agency' => $item->agency,
            'address' => $item->address,
            'city' => $item->city,
            'state_id' => $item->state_id,
            'zip' => $item->zip,
            'phone' => $item->phone,
            'email' => $item->email
        ];
    }
}