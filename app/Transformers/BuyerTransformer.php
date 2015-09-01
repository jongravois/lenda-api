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
            'loancrop_id' => $item->loancrop_id,
            'buyer' => $item->buyer,
            'buyer_email' => $item->buyer_email
        ];
    }
}