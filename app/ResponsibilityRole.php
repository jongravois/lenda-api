<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResponsibilityRole extends Model
{
    public $timestamps = false;
    protected $table = 'responsibility_roles';
    protected $fillable = ['responsibility_id', 'role_id', 'level'];

    /* CASTING */
    protected $casts = [];
    /* CASTING */

    /* RELATIONSHIPS */
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
