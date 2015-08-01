<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    public $timestamps = false;
    protected $table = 'agencies';
    protected $fillable = ['agency', 'address', 'city', 'state_id', 'zip', 'phone', 'email'];

    /* RELATIONSHIPS */
    public function agents()
    {
        return $this->hasMany('App\Agent', 'agency_id', 'id');
    }
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
