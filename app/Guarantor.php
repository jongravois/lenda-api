<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guarantor extends Model
{
    use ActivityTrait;

    protected $table = 'guarantors';
    protected $fillable = ['loan_id', 'guarantor', 'location', 'email', 'phone'];

    /* RELATIONSHIPS */
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
