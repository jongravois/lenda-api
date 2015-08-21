<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Otherincomesource extends Model
{
    public $timestamps = false;
    protected $table = 'otherincomesources';
    protected $fillable = ['source', 'description'];

    /* CASTING */
    protected $casts = [];
    /* CASTING */

    /* RELATIONSHIPS */
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
