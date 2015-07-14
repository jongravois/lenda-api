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
            'percent_owned' => (double)$item->percent_owned,
            'ssn' => $item->ssn,
            'address' => $item->address,
            'city' => $item->city,
            'state_id' => $item->state_id,
            'state' => $item->state_id,
            'state_abr' => $item->state_id,
            'zip' => $item->zip,
            'email' => $item->email,
            'phone' => $item->phone,
            'age' => (double)$item->age
        ];
    }
}   