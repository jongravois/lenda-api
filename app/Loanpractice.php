<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loanpractice extends Model
{
    protected $table = 'loanpractices';
    protected $fillable = ['crop_year', 'loan_id', 'crop_id', 'practice', 'is_active', 'farm_id', 'ins_type', 'ins_option', 'ins_price', 'ins_level', 'aph', 'ins_premium', 'acres', 'ins_share'];

    /* RELATIONSHIPS */
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
