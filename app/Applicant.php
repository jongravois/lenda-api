<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    protected $table = 'applicants';
    protected $fillable = ['grade', 'loc_id', 'entity_id', 'farmer_id', 'ssn', 'email', 'dob', 'address', 'phone', 'city', 'state_id', 'zip', 'rup', 'rup_num', 'rup_exp', 'spouse', 'spouse_ssn'];

    /* CASTING */
    protected $casts = [
        'rup' => 'boolean'
    ];
    /* CASTING */

    public function setRupExpAttribute($value)
    {
        $this->attributes['rup_exp'] = Carbon::createFromFormat('m/d/Y', $value);
    }

    /* RELATIONSHIPS */
    public function corps() {
        return $this->hasMany('App\Corporation');
    }
    public function entity() {
        return $this->belongsTo('App\Entitytype', 'entity_id');
    }
    public function fins() {
        return $this->hasOne('App\Applicantfinancial');
    }
    public function joints() {
        return $this->hasMany('App\Jointventure');
    }
    public function partners() {
        return $this->hasMany('App\Partner');
    }
    public function state() {
        return $this->belongsTo('App\State', 'state_id');
    }
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
