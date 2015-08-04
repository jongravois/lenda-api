<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rescat extends Model
{
    public $timestamps = false;
    protected $table = 'rescats';
    protected $fillable = ['category'];

    /* CASTING */
    protected $casts = [];
    /* CASTING */

    /* RELATIONSHIPS */
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
