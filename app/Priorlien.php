<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Priorlien extends Model
{
    protected $table = 'priorliens';
    protected $fillable = ['loan_id', 'lien_holder', 'city_state', 'contact', 'phone', 'email', 'projected_crops', 'fsa_payments', 'ins_over_discount', 'nonrp_discount', 'supplemental_coverage', 'claims', 'equipment', 'realestate', 'other', 'total'];

    /* RELATIONSHIPS */
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
