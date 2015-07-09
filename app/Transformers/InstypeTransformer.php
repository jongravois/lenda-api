<?php namespace App\Transformers;

use League\Fractal\TransformerAbstract;

class InstypeTransformer extends TransformerAbstract {
    public function transform(Instype $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'type' => $item->type
        ];
    }
}