<?php namespace App\Transformers;

use League\Fractal\TransformerAbstract;

class IndirectcropincomeTransformer extends TransformerAbstract {
    public function transform(Indirectcropincome $item)
    {
        //return $item->toArray();

        return [
            'id' => $item->id,
            'loan_id' => $item->loan_id,
            'source' => $item->source,
            'description' => $item->description,
            'amount' => (double)$item->amount,
            'disc_percent' => (double)$item->disc_percent,
            'collateral' => (boolean)$item->collateral
        ];
    }
}