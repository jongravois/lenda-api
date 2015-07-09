<?php namespace App\Transformers;

use App\Insunit;
use League\Fractal\TransformerAbstract;

class InsunitTransformer extends TransformerAbstract {
    public function transform(Insunit $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'unit' => $item->unit
        ];
    }
}