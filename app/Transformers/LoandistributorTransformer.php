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
            'distributor' => $item->distributor,
            'contact' => $item->contact,
            'contact_phone' => $item->phone,
            'contact_email' => $item->email,
            'dist_balance' => (double)$item->dist_balance,
            'dist_remaining' => (double)$item->dist_remaining
        ];
    }
}   