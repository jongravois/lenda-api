<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use ActivityTrait;

    protected $table = 'partners';
    protected $fillable = ['applicant_id', 'partner', 'title', 'location', 'email', 'phone'];

    /* RELATIONSHIPS */
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
