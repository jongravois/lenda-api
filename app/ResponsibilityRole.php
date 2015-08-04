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
    public function responsibilities()
    {
        return $this->belongsTo('App\Responsibility', 'responsibility_id');
    }
    public function role()
    {
        return $this->belongsTo('App\Role', 'role_id');
    }
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
