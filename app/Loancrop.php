<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loancrop extends Model
{
    protected $table = 'loancrops';
    protected $fillable = ['loan_id', 'crop_id', 'crop_measure', 'market', 'gin_mill', 'bkqty', 'bkprice', 'var_harvest', 'harvest_measure', 'rebates', 'rebate_measure'];

    /* CASTING */
    protected $casts = [
        'bkqty' => 'double',
        'bkprice' => 'double',
        'var_harvest' => 'double',
        'rebates' => 'double'
    ];
    /* CASTING */

    /* RELATIONSHIPS */
    public function crops() {
        return $this->hasMany('App\Crop', 'id', 'crop_id');
    }
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
