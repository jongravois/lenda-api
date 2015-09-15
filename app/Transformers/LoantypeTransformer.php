<?php namespace App\Transformers;

use App\Loantype;
use League\Fractal\TransformerAbstract;

class LoantypeTransformer extends TransformerAbstract {
    public function transform(Loantype $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'loantype' => $item->loantype,
            'abr' => $item->abr,
            'sort_order' => (integer)$item->sort_order,
            'default_due_date' => $item->default_due_date,
            'default_est_days' => (double)$item->default_est_days,
            'est_days' => (double)$item->default_est_days,
            'default_int_rate' => (double) $item->default_int_rate,
            'default_origination_fee_rate' => (double) $item->default_origination_fee_rate,
            'default_service_fee_rate' => (double) $item->default_service_fee_rate
        ];
    }
}