<?php namespace App\Transformers;

use App\Farmexpense;
use League\Fractal\TransformerAbstract;

class FarmexpenseTransformer extends TransformerAbstract {
    public function transform(Farmexpense $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'expense' => $item->expense,
            'cost' => (double) $item->cost
        ];
    }
}