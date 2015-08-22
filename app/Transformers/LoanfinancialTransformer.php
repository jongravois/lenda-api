<?php namespace App\Transformers;

use App\Loanfinancial;
use League\Fractal\TransformerAbstract;

class LoanfinancialTransformer extends TransformerAbstract {
    public function transform(Loanfinancial $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'loan_id' => (integer) $item->loan_id,
            'amount_requested' => (double) $item->amount_requested,
            'collateral_equipment' => (double) $item->collateral_equipment,
            'collateral_realestate' => (double) $item->collateral_realestate,
            'collateral_other' => (double) $item->collateral_other,
            'fee_onTotal' => (boolean) $item->fee_onTotal,
            'dist_buyDown' => (boolean) $item->dist_buyDown,
            'int_percent_arm' => (double) $item->int_percent_arm,
            'int_percent_arm_default' => (double) $item->int_percent_arm_default,
            'int_percent_arm_orig' => (double) $item->int_percent_arm_orig,
            'int_percent_dist' => (double) $item->int_percent_dist,
            'int_percent_dist_default' => (double) $item->int_percent_dist_default,
            'int_percent_dist_orig' => (double) $item->int_percent_dist_orig,
            'int_percent_other' => (double) $item->int_percent_other,
            'int_percent_other_default' => (double) $item->int_percent_other_default,
            'int_percent_other_orig' => (double) $item->int_percent_other_orig,
            'fee_processing' => (double) $item->fee_processing,
            'fee_service' => (double) $item->fee_service,
            'fee_service_dist' => (double) $item->fee_service,
            'max_loan' => (double) $item->max_loan,
            'max_rate' => (double) $item->max_rate,
        ];
    }
}