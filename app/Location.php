<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table = 'locations';

    protected $fillable = ['region_id', 'manager_id', 'location', 'loc_abr', 'address', 'city', 'state', 'zip', 'phone'];

    public function regions()
    {
        return $this->belongsTo('App\Region', 'region_id');
    }

    public function manager()
    {
        return $this->hasOne('App\User', 'id', 'manager_id');
    }

    public function users()
    {
        return $this->belongsTo('App\Users', 'loc_id');
    }
}
