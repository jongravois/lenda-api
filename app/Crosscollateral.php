<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crosscollateral extends Model
{
    use ActivityTrait;

    protected $table = 'crosscollaterals';
    protected $fillable = ['loan_id', 'collateral_id'];

    /* RELATIONSHIPS */
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
