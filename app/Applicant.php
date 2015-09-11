<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    protected $table = 'applicants';
    protected $fillable = ['grade', 'loc_id', 'entity_id', 'farmer_id', 'applicant.financials', 'ssn', 'email', 'dob', 'address', 'phone', 'city', 'state_id', 'zip', 'spouse', 'spouse_ssn'];

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
