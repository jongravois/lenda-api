<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aphdb extends Model
{
    protected $table = 'aphdbs';
    protected $fillable = ['inspol_id', 'farm_id', 'ins_share', 'aph'];

    /* CASTING */
    protected $casts = [
        'ins_share' => 'double',
        'aph' => 'double'
    ];
    /* CASTING */

    /* RELATIONSHIPS */
    public function inspols()
    {
        return $this->belongsTo('App\Inspol', 'inspol_id');
    }
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
