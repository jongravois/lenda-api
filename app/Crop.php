<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crop extends Model
{
    protected $table = 'crops';
    protected $hidden = ['created_at', 'updated_at'];
    protected $fillable = ['crop', 'name', 'sort_order', 'tea', 'arm_default_price', 'arm_default_ins_price', 'measurement', 'rebate_measurement'];

    /* CASTS */
    protected $casts = [
        'id' => 'integer',
        'sort_order' => 'integer',
        'tea' => 'double',
        'est_days' => 'double',
        'arm_default_price' => 'double',
        'arm_default_ins_price' => 'double',
        'arm_default_yield' => 'double'

    ];
    /* CASTS */

    /* RELATIONSHIPS */
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
