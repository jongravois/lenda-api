<?php namespace App\Transformers;

use App\Rebator;
use League\Fractal\TransformerAbstract;

class RebatorTransformer extends TransformerAbstract {
    public function transform(Rebator $item)
    {
        //return $item->toArray();

        return [
            'id' => $item->id,
            'loan_id' => $item->loan_id,
            'rebator' => $item->rebator,
            'location' => $item->location,
            'phone' => $item->phone,
            'email' => $item->email
        ];
    }
}