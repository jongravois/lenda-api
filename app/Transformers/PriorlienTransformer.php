<?php namespace App\Transformers;

use App\Priorlien;
use League\Fractal\TransformerAbstract;

class PriorlienTransformer extends TransformerAbstract {
    public function transform(Priorlien $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'loan_id' => $item->loan_id,
            'type' => $item->type,
            'lien_holder' => $item->lien_holder,
            'city_state' => $item->city_state,
            'contact' => $item->contact,
            'phone' => $item->phone,
            'email' => $item->email,
            'description' => $item->description,
            'lien_amount' => (double)$item->lien_amount
        ];
    }
}