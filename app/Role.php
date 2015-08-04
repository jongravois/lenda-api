<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public $timestamps = false;
    protected $table = 'roles';
    protected $fillable = ['abr', 'role', 'description', 'matrix'];

    /* CASTING */
    protected $casts = [
        'matrix' => 'boolean'
    ];
    /* CASTING */

    /* RELATIONSHIPS */
    public function responsibilities()
    {
        return $this->hasMany('App\Role');
    }
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
