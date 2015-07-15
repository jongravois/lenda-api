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
            //'state' => $item->state_id,
            'zip' => $item->zip,
            'locale' => $item->city . ', ' . $item->state_id,
            'phone' => $item->phone,
            'email' => $item->email
        ];
    }
}