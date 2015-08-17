<?php namespace App\Transformers;

use App\Distributor;
use League\Fractal\TransformerAbstract;

class DistributorTransformer extends TransformerAbstract {
    public function transform(Distributor $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'distributor' => $item->distributor,
            'name' => $item->name,
            'address' => $item->address,
            'city' => $item->city,
            'state_id' => $item->state_id,
            'state_abr' => $item->state->abr,
            'state' => $item->state->state,
            'zip' => $item->zip,
            'locale' => $item->city . ', ' . $item->state->abr,
            'contact' => $item->contact,
            'phone' => $item->phone,
            'email' => $item->email
        ];
    }
}