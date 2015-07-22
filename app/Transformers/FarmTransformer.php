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
            'cash_rent' => (double)$item->cash_rent,
            'when_due' => $item->when_due,
            'waived' => (double)$item->waived,
            'fsa_paid' => (double)$item->fsa_paid,
            'percent_irrigated' => (double)$item->percent_irrigated,
            'units' => $item->units
        ];
    }
}