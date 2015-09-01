<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Farmexpense extends Model
{
    use ActivityTrait;

    protected $table = 'farmexpenses';
    protected $fillable = ['crop_year','loan_id','expense','cost'];

    /* CASTING */
    protected $casts = [
        'cost' => 'double'
    ];
    /* CASTING */

    /* RELATIONSHIPS */
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
