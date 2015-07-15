<?php namespace App\Transformers;

use App\Guarantor;
use League\Fractal\TransformerAbstract;

class GuarantorTransformer extends TransformerAbstract {
    public function transform(Guarantor $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'loan_id' => $item->loan_id,
            'guarantor' => $item->guarantor
        ];
    }
}