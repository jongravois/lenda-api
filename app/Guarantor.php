<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guarantor extends Model
{
    use ActivityTrait;

    protected $table = 'guarantors';
    protected $fillable = ['loan_id', 'guarantor'];

    /* RELATIONSHIPS */
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
