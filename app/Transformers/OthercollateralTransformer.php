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
            'amount' => (double) $item->amount,
            'discount' => (double) $item->discount,
            'mkt_value' => (double)$item->mkt_value,
            'prior_lien' => (double)$item->prior_lien,
            'insurance' => (double)$item->insurance
        ];
    }
}