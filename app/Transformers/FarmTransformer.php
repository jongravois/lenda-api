<?php namespace App\Transformers;

use App\Farm;
use League\Fractal\TransformerAbstract;

class FarmTransformer extends TransformerAbstract {
    public function transform(Farm $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'loan_id' => $item->loan_id,
            'fsn' => $item->fsn,
            'county' => $item->county,
            'owner' => $item->owner,
            'cash_rent' => (double)$item->cash_rent,
            'share_rent' => (double)$item->share_rent,
            'when_due' => $item->when_due,
            'waived' => (double)$item->waived,
            'fsa_paid' => (double)$item->fsa_paid,
            'IR' => (double)$item->IR,
            'NI' => (double)$item->NI,
            'perm_to_insure' => (double)$item->perm_to_insure
        ];
    }
}