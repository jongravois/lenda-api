<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Globvar extends Model
{
    public $timestamps = false;
    protected $table = 'globvars';
    protected $fillable = ['crop_year', 'season', 'int_percent_arm', 'int_percent_dist', 'min_proc_fee', 'proc_fee_rate', 'svc_fee_rate', 'projected_crops_discount_rate', 'prod_discount_rate', 'fsa_assignment_discount_rate', 'ins_discount_rate', 'ins_discount_insoyield', 'rp_discount_rate', 'rphpe_discount_rate', 'yp_discount_rate', 'nonrp_discount_rate', 'supins_discount_rate', 'equipment_discount_rate', 'realestate_discount_rate', 'claims_discount_rate', 'current_bs_constraint', 'intermediate_bs_constraint', 'fixed_bs_constraint'];

    /* RELATIONSHIPS */
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
