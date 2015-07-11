<?php namespace App\Transformers;

use App\Spendcat;
use League\Fractal\TransformerAbstract;

class SpendcatTransformer extends TransformerAbstract {
    public function transform(Spendcat $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'category' => $item->category
        ];
    }
}