<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Committeespec extends Model
{
    protected $table = 'committeespecs';
    protected $fillable = ['loantype_id', 'min_amount', 'max_amount', 'min_debt_asset', 'max_debt_asset', 'min_loan_asset', 'max_loan_asset', 'applicant_grade', 'member_count'];

    /* CASTING */
    protected $casts = [
        'min_amount' => 'double',
        'max_amount' => 'double',
        'min_debt_asset' => 'double',
        'max_debt_asset' => 'double',
        'min_loan_asset' => 'double',
        'max_loan_asset' => 'double'
    ];
    /* CASTING */

    /* RELATIONSHIPS */
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
