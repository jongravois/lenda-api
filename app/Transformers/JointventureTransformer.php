<?php namespace App\Transformers;

use App\Jointventure;
use League\Fractal\TransformerAbstract;

class JointventureTransformer extends TransformerAbstract {
    public function transform(Jointventure $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'partner' => $item->partner,
            'percent_owned' => (double) $item->percent_owned,
            'ssn' => $item->ssn,
            'address' => $item->address,
            'city' => $item->city,
            'state_id' => $item->state_id,
            //'state' => $item->states']['state']',
            //'state_abr' => $item->states']['abr']',
            'zip' => $item->zip,
            'email' => $item->email,
            'phone' => $item->phone,
            'age' => $item->age
        ];
    }
}