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
            'state' => $item->state,
            'zip' => $item->zip,
            'locale' => $item->city . ', ' . $item->state,
            'contact' => $item->contact,
            'phone' => $item->phone,
            'email' => $item->email
        ];
    }
}