<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Farmer extends Model
{
    protected $table = 'farmers';
    //protected $dates = ['created_at', 'updated_at', 'dob'];
    protected $fillable = ['user_id', 'farmer', 'nick', 'ssn', 'address', 'city', 'state_id', 'zip', 'email', 'phone', 'dob', 'first_year_farmer', 'farm_exp', 'loc_id', 'new_client'];

    public function setDobAttribute($value)
    {
        $this->attributes['dob'] = Carbon::createFromFormat('m/d/Y', $value);
    }

    /* RELATIONSHIPS */
    public function applicants()
    {
        return $this->hasMany('App\Applicant');
    }
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
