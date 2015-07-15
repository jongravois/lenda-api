<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distributor extends Model
{
    public $timestamps = false;
    protected $table = 'distributors';
    protected $fillable = ['distributor', 'name', 'address', 'city', 'state_id', 'zip', 'phone', 'email'];

    /* RELATIONSHIPS */
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
