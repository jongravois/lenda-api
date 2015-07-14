<?php namespace App\Transformers;

use App\Othercollateral;
use League\Fractal\TransformerAbstract;

class OthercollateralTransformer extends TransformerAbstract {
    public function transform(Othercollateral $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'loan_id' => $item->loan_id,
            'type' => $item->type,
            'source' => $item->source,
            'description' => $item->description,
            'amount' => (double) $item->amount
        ];
    }
}