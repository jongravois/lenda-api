<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cropexpense extends Model
{
    protected $table = 'cropexpenses';
    protected $fillable = ['loan_id', 'crop_id', 'cat_id', 'loancrop_id', 'expense', 'arm', 'arm_adj', 'dist', 'dist_adj', 'other', 'other_adj'];

    /* RELATIONSHIPS */
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
