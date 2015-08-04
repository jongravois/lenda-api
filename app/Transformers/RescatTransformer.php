<?php namespace App\Transformers;

use League\Fractal\TransformerAbstract;

class RescatTransformer extends TransformerAbstract {
    public function transform(Rescat $item)
    {
        //return $item->toArray();

        return [
            'id' => $item->id,
            'category' => $item->category
        ];
    }
}