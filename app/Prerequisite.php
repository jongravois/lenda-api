<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prerequisite extends Model
{
    use ActivityTrait;

    protected $table = 'prerequisites';
    protected $fillable = ['loan_id', 'document', 'is_required', 'title', 'received', 'date_requested', 'date_received', 'reason_pending', 'filename', 'path'];

    /* RELATIONSHIPS */
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
