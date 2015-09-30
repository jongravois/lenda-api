<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plannedcrop extends Model
{
    protected $table = 'plannedcrops';
    protected $fillable = ['loan_id', 'crop_id', 'crop', 'acres', 'tea'];

    /* CASTING */
    protected $casts = [
        'acres' => 'double',
        'tea' => 'double'
    ];
    /* CASTING */

    /* RELATIONSHIPS */
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
