<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Indirectcropincome extends Model
{
    protected $table = 'indirectcropincomes';
    protected $fillable = ['loan_id', 'ppclaim', 'other'];

    /* CASTING */
    protected $casts = [
        'ppclaim' => 'double',
        'other' => 'double'
    ];
    /* CASTING */

    /* RELATIONSHIPS */
    public function loan()
    {
        return $this->belongsTo('App\Loan', 'loan_id
        ');
    }
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
