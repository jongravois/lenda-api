<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exception extends Model
{
    public $timestamps = false;
    protected $table = 'exceptions';
    protected $fillable = ['title', 'message'];

    /* RELATIONSHIPS */
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
