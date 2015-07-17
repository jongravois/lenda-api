<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentstatus extends Model
{
    protected $table = 'commentstatuses';
    protected $fillable = ['loan_id', 'comment_id', 'user_id', 'recipient_id', 'status'];

    /* RELATIONSHIPS */
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
