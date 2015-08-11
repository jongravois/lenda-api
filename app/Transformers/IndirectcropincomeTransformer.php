<?php namespace App\Transformers;

use League\Fractal\TransformerAbstract;

class IndirectcropincomeTransformer extends TransformerAbstract {
    public function transform(Indirectcropincome $item)
    {
        //return $item->toArray();

        return [
            'id' => $item->id,
            'ppclaim' => (double)$item->ppclaim,
            'other' => (double)$item->other
        ];
    }
}