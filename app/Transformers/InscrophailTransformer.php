<?php namespace App\Transformers;

use App\Inscrophail;
use League\Fractal\TransformerAbstract;

class InscrophailTransformer extends TransformerAbstract {
    public function transform(Inscrophail $item)
    {
        //return $item->toArray();

        return [
            'id' => $item->id,
            'loan_id' => (integer)$item->loan_id,
            'crop_id' => (integer)$item->crop_id,
            'county_id' => (integer)$item->county_id,
            'inspols_id' => (integer)$item->inspols_id,
            'amount' => (double)$item->amount,
            'premium' => (double)$item->premium,
            'ins_share' => (double)$item->ins_share
        ];
    }
}