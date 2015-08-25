<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loanpractice extends Model
{
    use ActivityTrait;

    protected $table = 'loanpractices';
    protected $hidden = ['created_at', 'updated_at'];
    protected $fillable = ['crop_year', 'loan_id', 'crop_id', 'loancrop_id', 'practice', 'is_active', 'farm_id', 'farmunit_id', 'ins_option', 'ins_level', 'ins_price', 'ins_type', 'ins_unit', 'aph', 'ins_premium', 'acres', 'prod_price', 'prod_share', 'prod_yield'];

    /* CASTS */
    protected $cast = [
        'crop_year' => 'integer',
        'loan_id' => 'integer',
        'farm_id' => 'integer',
        'crop_id' => 'integer',
        'loancrop_id' => 'integer',
        'is_active' => 'boolean',
        'plc' => 'boolean',
        'aph' => 'double',
        'ins_price' => 'double',
        'ins_share' => 'double',
        'ins_premium' => 'double',
        'acres' => 'double',
        'prod_price' => 'double',
        'prod_share' => 'double',
        'prod_yield' => 'double'
    ];
    /* CASTS */

    /* RELATIONSHIPS */
    public function farm()
    {
        return $this->belongsTo('App\Farm', 'farm_id');
    }
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
