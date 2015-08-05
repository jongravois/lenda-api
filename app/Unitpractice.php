<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unitpractice extends Model
{
    protected $table = 'unitpractices';
    protected $fillable = ['crop_year', 'loan_id', 'unit_id', 'crop_id', 'towhom_market', 'gin_mill', 'share_rent', 'acres', 'irrigated', 'ins_type', 'ins_option', 'ins_price', 'ins_level', 'aph', 'ins_premium', 'ins_share', 'prod_share', 'mill_share', 'prod_yield', 'prod_price', 'bkqty', 'bkprice', 'harvest', 'rebates', 'crop_disc', 'fsa_disc', 'cropins_disc', 'nonrp_disc', 'sco_disc'];

    /* CASTING */
    protected $casts = [
        'share_rent' => 'double',
        'acres' => 'double',
        'irrigated' => 'boolean',
        'ins_price' => 'double',
        'ins_level' => 'double',
        'aph' => 'double',
        'ins_premium' => 'double',
        'ins_share' => 'double',
        'prod_share' => 'double',
        'mill_share' => 'double',
        'prod_yield' => 'double',
        'prod_price' => 'double',
        'bkqty' => 'double',
        'bkprice' => 'double',
        'harvest' => 'double',
        'rebates' => 'double',
        'crop_disc' => 'double',
        'fsa_disc' => 'double',
        'cropins_disc' => 'double',
        'nonrp_disc' => 'double',
        'sco_disc' => 'double'
    ];
    /* CASTING */

    /* RELATIONSHIPS */
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
