<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fsapayment extends Model
{
    protected $table = 'fsapayments';
    protected $hidden = ['created_at', 'updated_at'];
    protected $fillable = ['loan_id', 'farm_id', 'pgm', 'base_acres', 'fsa_yield', 'amount'];

    /* CASTING */
    protected $casts = [
        'base_acres' => 'double',
        'fsa_yield' => 'double',
        'amount' => 'double'
    ];
    /* CASTING */

    /* RELATIONSHIPS */
    public function farms()
    {
        return $this->belongsTo('App\Farm', 'farm_id');
    }
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
