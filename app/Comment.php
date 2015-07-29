<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $fillable = ['loan_id', 'type', 'user_id', 'comment'];

    /* RELATIONSHIPS */
    public function responses()
    {
        return $this->hasMany('App\Recomment');
    }
    public function status()
    {
        return $this->hasMany('App\Commentstatus');
    }
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
