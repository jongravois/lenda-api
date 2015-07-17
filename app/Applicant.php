<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    protected $table = 'applicants';
    protected $fillable = ['grade', 'loc_id', 'entity_id', 'farmer_id', 'applicant', 'ssn', 'email', 'dob', 'address', 'phone', 'city', 'state_id', 'zip', 'spouse', 'spouse_ssn'];

    /* RELATIONSHIPS */
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
