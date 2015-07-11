<?php namespace App\Transformers;

use App\Committeespec;
use League\Fractal\TransformerAbstract;

class CommitteespecTransformer extends TransformerAbstract {
    public function transform(Committeespec $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'loantype_id' => $item->loantype_id,
            'min_amount' => (double)$item->min_amount,
            'max_amount' => (double)$item->max_amount,
            'member_count' => (integer)$item->member_count
        ];
    }
}