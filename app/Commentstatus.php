<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentstatus extends Model
{
    protected $table = 'commentstatuses';
    protected $fillable = ['comment_id', 'recipient_id', 'status'];
    protected $hidden = ['created_at', 'updated_at'];

    /* RELATIONSHIPS */
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
