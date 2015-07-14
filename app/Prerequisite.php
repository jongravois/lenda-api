<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prerequisite extends Model
{
    protected $table = 'prerequisites';
    protected $fillable = ['loan_id', 'document', 'title', 'received', 'date_requested', 'date_received', 'reason_pending', 'filename', 'path'];

    /* RELATIONSHIPS */
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
