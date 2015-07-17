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
            //'total_acres' => (double) getLoanTotalAcres($item->loan_id),
            'fee_processing_percent' => (double) $item->fee_processing,
            'fee_processing_onTotal' => (boolean) $item->fee_processing_onTotal,
            'int_percent_arm' => (double) $item->int_percent_arm,
            'int_percent_dist' => (double) $item->int_percent_dist,
            'int_percent_other' => (double) $item->int_percent_other,
            'int_arm' => (double) $item->int_arm, //calc
            'int_dist' => (double) $item->int_dist, //calc
            'int_other' => (double) $item->int_other, //calc
            'interest' => (double) $item->interest, //calc
            'fsa_assignment_percent' => (double) $item->fsa_assignment_percent,
            'disc_ins_percent' => (double) $item->disc_ins_percent,
            'claims_percent' => (double) $item->claims_percent,
            'equipment_percent' => (double) $item->equipment_percent,
            'realestate_percent' => (double) $item->realestate_percent,
            'proc_fee' => (double) $item->proc_fee, //calc
            'proc_fee_arm_only' => (double) $item->proc_fee_arm_only, //calc
            'fee_service_percent' => (double) $item->fee_service, //calc
            'fee_service_onTotal' => (boolean) $item->fee_service_onTotal,
            'srvc_fee' => (double) $item->srvc_fee, //calc
            'srvc_fee_arm_only' => (double) $item->srvc_fee_arm_only, //calc
            'total_fee_percent' => (double) $item->total_fee_percent, //calc
            'fee_total' => (double) $item->fee_total, //calc
            'total_fsa_payment' => (double) $item->total_fsa_payment, //harvest
            'total_claims' => (double) $item->total_claims, //harvest
            'total_revenue' => (double) $item->total_revenue, //calc
            'total_balance' => (double) $item->total_balance, //calc
            'remaining_balance' => (double) $item->remaining_balance, //calc
            'balance_paid' => (double) $item->balance_paid,
            'cash_flow' => (double) $item->cash_flow, //calc
            'risk' => (double) $item->risk, //calc
            'risk_adj' => (double) $item->risk_adj, //calc
            'guaranty' => (double) $item->guaranty, //calc
            'prod' => (double) $item->prod, //calc
            'adj_prod' => (double) $item->adj_prod, //calc
            'disc_prod' => (double) $item->disc_prod, //calc
            'disc_prod_percent' => (double) $item->disc_prod_percent, //calc
            'non_rp_percent' => (double) $item->non_rp_percent,
            'disc_adj_prod' => (double) $item->disc_adj_prod, //calc
            'ins_disc_prod' => (double) $item->ins_disc_prod, //calc
            'disc_ins' => (double) $item->disc_ins, //calc
            'commit_arm' => (double) $item->commit_arm, //calc
            'commit_dist' => (double) $item->commit_dist, //calc
            'commit_other' => (double) $item->commit_other, //calc
            'commit_total' => (double) $item->commit_total, //calc
            'principal_arm' => (double) $item->principal_arm, //calc
            'principal_dist' => (double) $item->principal_dist, //calc
            'principal_other' => (double) $item->principal_other, //calc
            'principal' => (double) $item->principal, //calc
            'arm_and_dist' => (double) $item->arm_and_dist, //calc
            'collateral' => (double) $item->collateral
        ];
    }
}