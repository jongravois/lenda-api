<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Farm extends Model
{
    protected $table = 'farms';
    protected $fillable = ['loan_id', 'fsn', 'county_id', 'owner', 'share_rent', 'cash_rent', 'waived', 'when_due', 'IR', 'NI', 'perm_to_insure', 'fsa_paid'];

    /* CASTS */
    protected $casts = [
        'share_rent' => 'double',
        'cash_rent' => 'double',
        'waived' => 'double',
        'IR' => 'double',
        'NI' => 'double',
        'perm_to_insure' => 'boolean',
        'fsa_paid' => 'double'
    ];
    /* CASTS */

    /* RELATIONSHIPS */
    public function county()
    {
        return $this->belongsTo('App\County', 'county_id');
    }
    public function loans()
    {
        return $this->belongsTo('App\Loan', 'loan_id');
    }
    public function units()
    {
        return $this->hasMany('App\Loanpractice', 'farm_id', 'id');
    }
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
