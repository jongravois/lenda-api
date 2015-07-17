<?php namespace App\Transformers;

use App\Loandistributor;
use League\Fractal\TransformerAbstract;

class LoandistributorTransformer extends TransformerAbstract {
    public function transform(Loandistributor $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'loan_id' => $item->loan_id,
            'distributor_id' => $item->distributor_id,
            'distributor' => $item->distributor_id,
            'address' => $item->distributor_id,
            'city' => $item->distributor_id,
            'state_id' => $item->distributor_id,
            'state' => $item->distributor_id,
            'zip' => $item->distributor_id,
            'phone' => $item->distributor_id,
            'email' => $item->distributor_id,
            'contact' => $item->contact,
            'contact_phone' => $item->phone,
            'contact_email' => $item->email
        ];
    }
}   