<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rebator extends Model
{
    protected $table = 'rebators';
    protected $hidden = ['created_at', 'updated_at'];
    protected $fillable = ['loan_id', 'rebator', 'contact', 'location', 'phone', 'email'];

    /* CASTING */
    protected $casts = [];
    /* CASTING */

    /* RELATIONSHIPS */
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
