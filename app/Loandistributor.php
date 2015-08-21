<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loandistributor extends Model
{
    use ActivityTrait;

    protected $table = 'loandistributors';
    protected $fillable = ['loan_id', 'distributor_id', 'contact', 'phone', 'email', 'dist_balance', 'dist_remaining'];

    /* RELATIONSHIPS */
    public function distributor()
    {
        return $this->belongsTo('App\Distributor', 'distributor_id');
    }
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
