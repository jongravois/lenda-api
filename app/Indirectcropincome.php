<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Indirectcropincome extends Model
{
    use ActivityTrait;

    protected $table = 'indirectcropincomes';
    protected $fillable = ['loan_id', 'source', 'description', 'amount', 'disc_percent', 'collateral'];

    /* CASTING */
    protected $casts = [
        'amount' => 'double',
        'disc_percent' => 'double',
        'collateral' => 'boolean'
    ];
    /* CASTING */

    /* RELATIONSHIPS */
    public function loan()
    {
        return $this->belongsTo('App\Loan', 'loan_id
        ');
    }
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
