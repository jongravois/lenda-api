<?php namespace App\Transformers;

use App\Insopt;
use League\Fractal\TransformerAbstract;

class InsoptTransformer extends TransformerAbstract {
    public function transform(Insopt $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'option' => $item->option
        ];
    }
}