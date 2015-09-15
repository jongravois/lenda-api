<?php namespace App\Transformers;

use App\Buyer;
use League\Fractal\TransformerAbstract;

class BuyerTransformer extends TransformerAbstract {
    public function transform(Buyer $item)
    {
        //return $item->toArray();

        return [
            'id' => $item->id,
            'loan_id' => $item->loan_id,
            'buyer' => $item->buyer,
            'contact' => $item->contact,
            'location' => $item->location,
            'phone' => $item->phone,
            'email' => $item->email
        ];
    }
}