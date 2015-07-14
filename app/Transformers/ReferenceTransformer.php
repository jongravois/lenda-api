<?php namespace App\Transformers;

use App\Reference;
use League\Fractal\TransformerAbstract;

class ReferenceTransformer extends TransformerAbstract {
    public function transform(Reference $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'loan_id' => $item->loan_id,
            'creditor' => $item->creditor,
            'city_state' => $item->city_state,
            'contact' => $item->contact,
            'phone' => $item->phone,
            'email' => $item->email
        ];
    }
}