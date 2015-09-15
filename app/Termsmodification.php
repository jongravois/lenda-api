<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Termsmodification extends Model
{
    protected $table = 'termsmodifications';
    protected $hidden = ['created_at', 'updated_at'];
    protected $fillable = ['loan_id', 'modification_date', 'due_date', 'est_days', 'int_percent_arm', 'int_percent_dist', 'fee_processing_arm', 'fee_service_arm', 'fee_processing_dist', 'fee_service_dist', 'fee_processing_borrower', 'fee_service_borrower'];

    public function setDueDateAttribute($value)
    {
        $this->attributes['due_date'] = Carbon::createFromFormat('m/d/Y', $value);
    }
    public function setModificationDateAttribute($value)
    {
        $this->attributes['modification_date'] = Carbon::createFromFormat('m/d/Y', $value);
    }


    /* CASTING */
    protected $casts = [
        'id' => 'integer',
        'est_days' => 'integer',
        'int_percent_arm' => 'double',
        'int_percent_dist' => 'double',
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
