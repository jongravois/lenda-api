<?php namespace App\Transformers;

use App\Loancrop;
use League\Fractal\TransformerAbstract;

class LoancropTransformer extends TransformerAbstract {
    public function transform(Loancrop $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'loan_id' => $item->loan_id,
            'crop' => $item->crop,
            'crop_measure' => $item->crop_measure,
            'bkqty' => $item->bkqty,
            'bkprice' => $item->bkprice,
            'var_harvest' => $item->var_harvest,
            'harvest_measure' => $item->harvest_measure,
            'rebates' => $item->rebates,
            'rebate_measure' => $item->rebate_measure,
            'buyers' => $item->buyers,
            'practices' => $item->practices,
            'rebators' => $item->rebators
        ];
    }
}