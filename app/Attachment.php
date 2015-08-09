<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    protected $table = 'attachments';
    protected $fillable = ['loan_id', 'user_id', 'status', 'title', 'filename', 'path', 'filetype', 'original_filename', 'description', 'date_requested', 'date_received'];

    /* RELATIONSHIPS */
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
