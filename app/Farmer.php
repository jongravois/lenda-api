<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Farmer extends Model
{
    protected $table = 'farmers';
    protected $fillable = ['user_id', 'farmer', 'nick', 'ssn', 'address', 'city', 'state_id', 'zip', 'email', 'phone', 'dob', 'first_year_farmer', 'farm_exp', 'loc_id', 'new_client'];

    public function setDobAttribute($value)
    {
        $this->attributes['dob'] = Carbon::createFromFormat('d/m/Y', $value);
    }
    public function getDobAttribute($value)
    {
        if (is_null($value))
            return null;
        else
            return Carbon::parse($value)->format('m/d/Y');
    }

    /* RELATIONSHIPS */
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
