<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $table = 'regions';
    protected $fillable = ['manager_id', 'region'];

    public function locations()
    {
        return $this->hasMany('App\Location');
    }

    public function manager()
    {
        return $this->hasOne('App\User', 'id', 'manager_id');
    }
}
