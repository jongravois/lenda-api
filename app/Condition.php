<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Condition extends Model
{
    public $timestamps = false;
    protected $table = 'conditions';
    protected $fillable = ['condition', 'loantype_id'];

    /* CASTING */
    protected $casts = [];
    /* CASTING */

    /* RELATIONSHIPS */
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
