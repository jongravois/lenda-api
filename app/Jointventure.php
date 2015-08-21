<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jointventure extends Model
{
    use ActivityTrait;

    protected $table = 'jointventures';
    protected $fillable = ['loan_id', 'partner', 'percent_owned', 'ssn', 'address', 'city', 'state_id', 'zip', 'email', 'phone', 'age'];

    /* RELATIONSHIPS */
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
