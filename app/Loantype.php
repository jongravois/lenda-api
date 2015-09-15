<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loantype extends Model
{
    public $timestamps = false;
    protected $table = 'loantypes';
    protected $fillable = ['loantype', 'abr', 'sort_order', 'default_due_date', 'default_int_rate', 'default_origination_fee_rate', 'default_service_fee_rate', 'est_days'];

    /* CASTS */
    protected $casts = [
        'est_days' => 'integer',
        'default_int_rate' => 'double',
        'default_origination_fee_rate' => 'double',
        'default_service_fee_rate' => 'double'
    ];
    /* CASTS */

    /* RELATIONSHIPS */
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
