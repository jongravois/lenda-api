<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Storagecontract extends Model
{
    use ActivityTrait;

    protected $table = 'storagecontracts';
    protected $fillable = ['loan_id', 'contract_number', 'contract_date', 'delivery_date', 'commodity', 'grain_buyer', 'lien_holder', 'contract_amount', 'contract_price', 'owner_share', 'amount_requested', 'revenue', 'eligible_proceeds', 'advance_percent', 'payment_terms'];

    /* RELATIONSHIPS */
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
