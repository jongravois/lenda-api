<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jointventure extends Model
{
    use ActivityTrait;

    protected $table = 'jointventures';
    protected $fillable = ['applicant_id', 'partner', 'title', 'location', 'email', 'phone'];

    /* RELATIONSHIPS */
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
