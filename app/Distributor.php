<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distributor extends Model
{
    public $timestamps = false;
    protected $table = 'distributors';
    protected $fillable = ['distributor', 'name', 'address', 'city', 'state', 'zip', 'contact', 'phone', 'email'];

    /* RELATIONSHIPS */
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
