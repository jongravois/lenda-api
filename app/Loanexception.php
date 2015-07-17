<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loanexception extends Model
{
    protected $table = 'loanexceptions';
    protected $fillable = ['loan_id', 'exception_id', 'exception_name', 'msg'];

    /* RELATIONSHIPS */
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
