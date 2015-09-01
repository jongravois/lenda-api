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
            'loancrop_id' => $item->loancrop_id,
            'rebator' => $item->rebator,
            'rebator_email' => $item->rebator_email
        ];
    }
}