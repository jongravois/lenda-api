<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Committee extends Model
{
    protected $table = 'committees';
    protected $fillable = ['loan_id', 'role_id', 'user_id', 'committee_role', 'vote_status', 'vote_request_date', 'vote_received_date', 'vote_id'];

    /* RELATIONSHIPS */
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
