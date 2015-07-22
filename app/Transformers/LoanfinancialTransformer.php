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
            'disc_percent_crop' => (double) $item->disc_percent_crop,
            'disc_percent_fsa' => (double) $item->disc_percent_fsa,
            'disc_percent_ins' => (double) $item->disc_percent_ins,
            'disc_percent_insoyield' => (double) $item->disc_percent_insoyield,
            'disc_percent_nonrp' => (double) $item->disc_percent_nonrp,
            'disc_percent_rphpe' => (double) $item->disc_percent_rphpe,
            'disc_percent_suppins' => (double) $item->disc_percent_suppins,
            'disc_percent_prod' => (double) $item->disc_percent_prod,
            'disc_percent_equipment' => (double) $item->disc_percent_equipment,
            'disc_percent_realestate' => (double) $item->disc_percent_realestate,
            'disc_percent_other' => (double) $item->disc_percent_other,
            'collateral_equipment' => (double) $item->collateral_equipment,
            'collateral_realestate' => (double) $item->collateral_realestate,
            'fee_processing_onTotal' => (double) $item->fee_processing_onTotal,
            'fee_service_onTotal' => (double) $item->fee_service_onTotal,
            'int_percent_arm' => (double) $item->int_percent_arm,
            'int_percent_dist' => (double) $item->int_percent_dist,
            'int_percent_other' => (double) $item->int_percent_other,
            'total_fee_percent' => (double) $item->total_fee_percent,
        ];
    }
}