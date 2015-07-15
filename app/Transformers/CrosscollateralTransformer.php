<?php namespace App\Transformers;

use App\Crosscollateral;
use League\Fractal\TransformerAbstract;

class CrosscollateralTransformer extends TransformerAbstract {
    public function transform(Crosscollateral $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'loan_id' => $item->loan_id,
            'collateral_id' => $item->collateral_id
        ];
    }
}