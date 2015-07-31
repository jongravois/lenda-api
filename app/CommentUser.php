<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentUser extends Model
{
    protected $table = 'comment_users';
    protected $fillable = ['comment_id', 'recipient_id', 'sender_id'];

    /* CASTING */
    protected $casts = [];
    /* CASTING */

    /* RELATIONSHIPS */
    public function comment()
    {
        return $this->belongsTo('App\Comment', 'comment_id');
    }
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
