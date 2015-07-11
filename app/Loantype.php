<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loantype extends Model
{
    public $timestamps = false;
    protected $table = 'loantypes';
    protected $fillable = ['loantype', 'abr', 'sort_order', 'default_due_date'];

    /* RELATIONSHIPS */
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
