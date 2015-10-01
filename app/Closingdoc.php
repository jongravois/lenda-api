<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Closingdoc extends Model
{
    protected $table = 'closingdocs';
    protected $fillable = ['loan_id', 'is_required', 'name', 'path', 'status'];

    /* CASTING */
    protected $casts = [
        'is_required' => 'boolean'
    ];
    /* CASTING */

    /* RELATIONSHIPS */
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
