<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loancropyield extends Model
{
    protected $table = 'loancropyields';
    protected $fillable = ['loancrop_id', 'p1', 'p2', 'p3', 'p4', 'p5', 'p6'];

    /* CASTING */
    protected $casts = [
        'p1' => 'double',
        'p2' => 'double',
        'p3' => 'double',
        'p4' => 'double',
        'p5' => 'double',
        'p6' => 'double'
    ];
    /* CASTING */

    /* RELATIONSHIPS */
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
