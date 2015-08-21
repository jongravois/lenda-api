<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recomment extends Model
{
    use ActivityTrait;

    protected $table = 'recomments';
    protected $fillable = ['loan_id', 'comment_id', 'user_id', 'body'];

    /* RELATIONSHIPS */
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
