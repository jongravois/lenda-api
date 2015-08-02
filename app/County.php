<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class County extends Model
{
    public $timestamps = false;
    protected $table = 'counties';
    protected $fillable = ['state_id','location_id','county','label','locale'];

    /* RELATIONSHIPS */
    public function countydefaults() {
        return $this->hasOne('App\Defaultcountycrop');
    }
    public function state()
    {
        return $this->belongsTo('App\State', 'state_id');
    }
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
