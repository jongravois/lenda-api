<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crop extends Model
{
    protected $table = 'crops';
    protected $fillable = ['crop', 'name', 'sort_order', 'tea', 'arm_default_price', 'arm_default_ins_price', 'arm_default_yield', 'measurement', 'rebate_measurement'];

    /* RELATIONSHIPS */
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
