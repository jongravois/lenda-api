<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Othercollateral extends Model
{
    protected $table = 'othercollaterals';
    protected $fillable = ['loan_id', 'type', 'source', 'description', 'amount'];

    /* RELATIONSHIPS */
    public function loan()
    {
        return $this->belongsTo('App\Loan', 'loan_id');
    }
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
