<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Defaultcommittee extends Model
{
    protected $table = 'defaultcommittees';
    protected $fillable = ['loantype_id', 'committeerole'];

    /* CASTING */
    protected $casts = [];
    /* CASTING */

    /* RELATIONSHIPS */
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
