<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Termsmodification extends Model
{
    protected $table = 'termsmodifications';
    protected $hidden = ['created_at', 'updated_at'];
    protected $fillable = ['loan_id', 'mod_date', 'mod_type', 'due_date', 'est_days', 'fee_onTotal', 'dist_buyDown', 'int_percent_arm', 'int_percent_dist', 'int_percent_borrower', 'fee_processing_arm', 'fee_service_arm', 'fee_processing_dist', 'fee_service_dist', 'fee_processing_borrower', 'fee_service_borrower'];

    public function setDueDateAttribute($value)
    {
        $this->attributes['due_date'] = Carbon::createFromFormat('m/d/Y', $value);
    }
    public function setModDateAttribute($value)
    {
        $this->attributes['mod_date'] = Carbon::createFromFormat('m/d/Y', $value);
    }


    /* CASTING */
    protected $casts = [
        'id' => 'integer',
        'est_days' => 'integer',
        'fee_onTotal' => 'boolean',
        'dist_buyDown' => 'boolean',
        'int_percent_arm' => 'double',
        'int_percent_dist' => 'double',
        'int_percent_borrower' => 'double',
        'fee_processing_arm' => 'double',
        'fee_service_arm' => 'double',
        'fee_processing_dist' => 'double',
        'fee_service_dist' => 'double',
        'fee_processing_borrower' => 'double',
        'fee_service_borrower' => 'double'
    ];
    /* CASTING */

    /* RELATIONSHIPS */
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
