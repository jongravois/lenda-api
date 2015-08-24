<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Farmunit extends Model
{
    protected $table = 'farmunits';
    protected $fillable = ['loan_id', 'farm_id', 'unit_type', 'practice', 'acres'];
    protected $hidden = ['created_at', 'updated_at'];

    /* CASTING */
    protected $casts = [
        'acres' => 'double'
    ];
    /* CASTING */

    /* RELATIONSHIPS */
    public function database()
    {
        return $this->hasMany('App\Aphdb', 'farm_id', 'farm_id');
    }
    public function farm()
    {
        return $this->belongsTo('App\Farm', 'farm_id');
    }
    public function practices()
    {
        return $this->hasMany('App\Loanpractice', 'farm_id', 'farm_id');
    }

    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
