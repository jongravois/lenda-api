<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    use ActivityTrait;

    protected $table = 'attachments';
    protected $fillable = ['loan_id', 'user_id', 'status', 'is_required', 'title', 'filename', 'path', 'filetype', 'original_filename', 'description', 'date_requested', 'date_received'];

    protected $casts = [
        'is_required' => 'boolean'
    ];

    /* RELATIONSHIPS */
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
