<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reference extends Model
{
    public $timestamps = false;
    protected $table = 'references';
    protected $fillable = ['loan_id', 'creditor', 'city_state', 'contact', 'phone', 'email'];

    /* RELATIONSHIPS */
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
