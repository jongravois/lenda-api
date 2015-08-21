<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use ActivityTrait;

    protected $table = 'partners';
    protected $fillable = ['loan_id', 'partner', 'title', 'percent_owned', 'age', 'ssn', 'address', 'city', 'state_id', 'zip', 'email', 'phone'];

    /* RELATIONSHIPS */
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
