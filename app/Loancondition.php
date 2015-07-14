<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loancondition extends Model
{
    protected $table = 'loanconditions';
    protected $fillable = ['crop_year', 'loan_id', 'category', 'condition', 'status', 'action_date'];

    /* RELATIONSHIPS */
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
