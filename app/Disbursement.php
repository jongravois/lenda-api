<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disbursement extends Model
{
    protected $table = 'disbursements';
    protected $fillable = ['loan_id', 'crop_year', 'cat_id', 'expense', 'arm_budget', 'spent', 'requested', 'status'];

    /* RELATIONSHIPS */
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
