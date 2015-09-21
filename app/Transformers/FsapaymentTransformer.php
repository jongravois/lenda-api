<?php namespace App\Transformers;

use App\Fsapayment;
use League\Fractal\TransformerAbstract;

class FsapaymentTransformer extends TransformerAbstract {
    public function transform(Fsapayment $item)
    {
        //return $item->toArray();

        return [
            'id' => $item->id,
            'loan_id' => $item->loan_id,
            'farm_id' => $item->farm_id,
            'fsn' => $item->farms->fsn,
            'county_id' => $item->farms->county_id,
            'county' => $item->farms->county->county,
            'state' => $item->farms->county->state->abr,
            'locale' => $item->farms->county->label,
            'owner' => $item->farms->owner,
            'pgm' => $item->pgm,
            'base_acres' => (double)$item->base_acres,
            'fsa_yield' => (double)$item->fsa_yield,
            'amount' => (double)$item->amount,
            'farms' => $item->farms
        ];
    }
}