<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Storagecontract extends Model
{
    use ActivityTrait;

    protected $table = 'storagecontracts';
    protected $fillable = ['loan_id', 'contract_number', 'contract_date', 'delivery_date', 'commodity', 'grain_buyer', 'lien_holder', 'contract_amount', 'mkt_set', 'contract_price', 'owner_share', 'amount_requested', 'revenue', 'eligible_proceeds', 'advance_percent', 'payment_terms'];

    protected $casts = [
        'mkt_set' => 'boolean',
        'contract_amount' => 'double',
        'contract_price' => 'double',
        'owner_share' => 'double',
        'amount_requested' => 'double',
        'revenue' => 'double',
        'eligible_proceeds' => 'double',
        'advance_percent' => 'double',
        'payment_terms' => 'double'
    ];

    /* RELATIONSHIPS */
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
