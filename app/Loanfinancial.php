<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loanfinancial extends Model
{
    protected $table = 'loanfinancials';
    protected $fillable = ['loan_id', 'amount_requested', 'disc_percent_crop', 'disc_percent_fsa', 'disc_percent_ins', 'disc_percent_insoyield', 'disc_percent_nonrp', 'disc_percent_rphpe', 'disc_percent_suppins', 'disc_percent_prod', 'disc_percent_equipment', 'disc_percent_realestate', 'disc_percent_other', 'collateral_equipment', 'collateral_realestate', 'fee_processing_onTotal', 'fee_service_onTotal', 'int_percent_arm', 'int_percent_dist', 'int_percent_other'];

    /* RELATIONSHIPS */
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
