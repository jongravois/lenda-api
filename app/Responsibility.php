<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Responsibility extends Model
{
    public $timestamps = false;
    protected $table = 'responsibilities';
    protected $fillable = ['cat_id', 'task'];

    /* CASTING */
    protected $casts = [];
    /* CASTING */

    /* RELATIONSHIPS */
    public function category()
    {
        return $this->belongsTo('App\Rescat', 'cat_id');
    }
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
