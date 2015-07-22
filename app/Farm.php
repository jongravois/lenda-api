<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Farm extends Model
{
    protected $table = 'farms';
    protected $fillable = ['loan_id', 'fsn', 'cash_rent', 'waived', 'when_due', 'fsa_paid', 'percent_irrigated'];

    /* RELATIONSHIPS */
    public function units()
    {
        return $this->hasMany('App\Farmunit');
    }
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
