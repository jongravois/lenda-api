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
            'state_abr' => $item->states->abr,
            'states' => $item->states,
            'zip' => $item->zip,
            'locale' => $item->city . ', ' . $item->states->abr,
            'contact' => $item->contact,
            'phone' => $item->phone,
            'email' => $item->email
        ];
    }
}