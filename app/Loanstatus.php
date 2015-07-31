<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loanstatus extends Model
{
    public $timestamps = false;
    protected $table = 'loanstatus';
    protected $fillable = ['status', 'iconClass', 'iconColor'];

    /* CASTING */
    protected $casts = [
        'id' => 'integer'
    ];
    /* CASTING */

    /* RELATIONSHIPS */
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
