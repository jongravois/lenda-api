<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loancrop extends Model
{
    use ActivityTrait;

    protected $table = 'loancrops';
    protected $hidden = ['created_at', 'updated_at'];
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
    public function crop()
    {
        return $this->hasOne('App\Crop', 'id', 'crop_id');
    }
    public function practices()
    {
        return $this->hasMany('App\Loanpractice', 'loancrop_id', 'id');
    }
    public function yields()
    {
        return $this->hasMany('App\Loancropyield');
    }
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
