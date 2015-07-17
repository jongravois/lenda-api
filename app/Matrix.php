<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matrix extends Model
{
    public $timestamps = false;
    protected $table = 'matrix';
    protected $fillable = ['group_heading', 'responsibility', 'CEO', 'ABM', 'MGR', 'OAS', 'LBM', 'LOF', 'LAN', 'CON', 'HRM', 'IBM', 'IAS', 'COM'];

    /* RELATIONSHIPS */
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
