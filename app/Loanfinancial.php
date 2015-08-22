<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loanfinancial extends Model
{
    use ActivityTrait;

    protected $table = 'loanfinancials';
    protected $fillable = ['loan_id', 'amount_requested', 'collateral_equipment', 'collateral_realestate', 'collateral_other', 'fee_onTotal', 'dist_buyDown', 'int_percent_arm', 'int_percent_arm_default', 'int_percent_arm_orig', 'int_percent_dist', 'int_percent_dist_default', 'int_percent_dist_orig', 'int_percent_other', 'int_percent_other_default', 'int_percent_other_orig', 'fee_processing', 'fee_service', 'fee_service_dist', 'max_loan', 'max_rate'];
    protected $hidden = ['created_at', 'updated_at'];

    /* CASTING */
    protected $casts = [
        'amount_requested' => 'double',
        'collateral_equipment' => 'double',
        'collateral_realestate' => 'double',
        'collateral_other' => 'double',
        'fee_onTotal' => 'boolean',
        'dist_buyDown' => 'boolean',
        'int_percent_arm' => 'double',
        'int_percent_arm_default' => 'double',
        'int_percent_arm_orig' => 'double',
        'int_percent_dist' => 'double',
        'int_percent_dist_default' => 'double',
        'int_percent_dist_orig' => 'double',
        'int_percent_other' => 'double',
        'int_percent_other_default' => 'double',
        'int_percent_other_orig' => 'double',
        'fee_processing' => 'double',
        'fee_service' => 'double',
        'fee_service_dist' => 'double',
        'max_loan' => 'double',
        'max_rate' => 'double'
    ];
    /* CASTING */

    /* RELATIONSHIPS */
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
