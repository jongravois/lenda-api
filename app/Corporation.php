<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Corporation extends Model
{
    use ActivityTrait;

    protected $table = 'corporations';
    protected $fillable = ['loan_id', 'corporation', 'ssn', 'address', 'city', 'state_id', 'zip', 'email', 'phone', 'president', 'vicepresident', 'secretary', 'treasurer'];

    /* RELATIONSHIPS */
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
