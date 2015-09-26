<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Farmer extends Model
{
    protected $table = 'farmers';
    protected $fillable = ['user_id', 'farmer', 'nick', 'ssn', 'address', 'city', 'state_id', 'zip', 'email', 'phone', 'dob', 'first_year_farmer', 'farm_exp', 'loc_id', 'new_client'];

    /* RELATIONSHIPS */
    public function applicants()
    {
        return $this->hasMany('App\Applicant');
    }
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
