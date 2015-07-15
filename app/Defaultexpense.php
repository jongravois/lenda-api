<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Defaultexpense extends Model
{
    public $timestamps = false;
    protected $table = 'defaultexpenses';
    protected $fillable = ['region_id', 'location_id', 'crop_id', 'loancrop_id', 'cat_id', 'expense', 'arm', 'arm_adj', 'dist', 'dist_adj', 'other', 'other_adj'];

    /* RELATIONSHIPS */
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
