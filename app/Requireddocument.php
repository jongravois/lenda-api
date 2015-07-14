<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requireddocument extends Model
{
    public $timestamps = false;
    protected $table = 'requireddocuments';
    protected $fillable = ['loantype_id', 'document'];

    /* RELATIONSHIPS */
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
