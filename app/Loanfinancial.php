<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loanfinancial extends Model
{
    use ActivityTrait;

    protected $table = 'loanfinancials';
    protected $fillable = ['loan_id', 'amount_requested', 'collateral_equipment', 'collateral_realestate', 'fee_onTotal', 'int_percent_arm', 'int_percent_dist', 'int_percent_other'];
    protected $hidden = ['created_at', 'updated_at'];

    /* CASTING */
    protected $casts = [
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
