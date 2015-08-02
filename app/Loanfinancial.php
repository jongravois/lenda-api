<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loanfinancial extends Model
{
    protected $table = 'loanfinancials';
    protected $fillable = ['loan_id', 'amount_requested', 'disc_percent_crop', 'disc_percent_fsa', 'disc_percent_ins', 'disc_percent_insoyield', 'disc_percent_nonrp', 'disc_percent_rphpe', 'disc_percent_suppins', 'disc_percent_prod', 'disc_percent_equipment', 'disc_percent_realestate', 'disc_percent_other', 'collateral_equipment', 'collateral_realestate', 'fee_onTotal', 'int_percent_arm', 'int_percent_dist', 'int_percent_other'];
    protected $hidden = ['created_at', 'updated_at'];

    /* CASTING */
    protected $casts = [
        'disc_percent_crop' => 'double',
        'disc_percent_fsa' => 'double',
        'disc_percent_ins' => 'double',
        'disc_percent_insoyield' => 'double',
        'disc_percent_nonrp' => 'double',
        'disc_percent_rphpe' => 'double',
        'disc_percent_suppins' => 'double',
        'disc_percent_prod' => 'double',
        'disc_percent_equipment' => 'double',
        'disc_percent_realestate' => 'double',
        'disc_percent_other' => 'double',
        'amount_requested' => 'double',
        'collateral_equipment' => 'double',
        'collateral_realestate' => 'double',
        'fee_onTotal' => 'boolean',
        'int_percent_arm' => 'double',
        'int_percent_dist' => 'double',
        'int_percent_other' => 'double',
        'total_fsa_payment' => 'double',
        'total_claims' => 'double',
        'total_fee_percent' => 'double',
        'commit_arm' => 'double',
        'commit_dist' => 'double',
        'commit_other' => 'double',
        'commit_total' => 'double',
        'fee_processing' => 'double',
        'proc_fee' => 'double',
        'proc_fee_arm_only' => 'double',
        'fee_service' => 'double',
        'srvc_fee' => 'double',
        'srvc_fee_arm_only' => 'double',
        'fee_total' => 'double',
        'principal_arm' => 'double',
        'principal_dist' => 'double',
        'principal_other' => 'double',
        'principal' => 'double',
        'int_arm' => 'double',
        'int_dist' => 'double',
        'int_other' => 'double',
        'interest' => 'double',
        'guaranty' => 'double',
        'prod' => 'double',
        'adj_prod' => 'double',
        'disc_prod' => 'double',
        'disc_adj_prod' => 'double',
        'ins_disc_prod' => 'double',
        'disc_ins' => 'double',
        'total_revenue' => 'double',
        'arm_and_dist' => 'double',
        'collateral' => 'double',
        'total_balance' => 'double',
        'remaining_balance' => 'double',
        'balance_paid' => 'double',
        'cash_flow' => 'double',
        'risk' => 'double',
        'risk_adj' => 'double',
        'max_loan' => 'double',
        'max_rate' => 'double'
    ];
    /* CASTING */

    /* RELATIONSHIPS */
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
