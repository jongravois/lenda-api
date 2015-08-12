<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aphdb extends Model
{
    protected $table = 'aphdbs';
    protected $fillable = ['loan_id', 'inspol_id', 'farm_id', 'ins_share', 'aph'];

    /* CASTING */
    protected $casts = [
        'ins_share' => 'double',
        'aph' => 'double'
    ];
    /* CASTING */

    /* RELATIONSHIPS */
    public function farms()
    {
        return $this->belongsTo('App\Farm', 'farm_id');
    }
    public function inspols()
    {
        return $this->belongsTo('App\Inspol', 'inspol_id');
    }
    public function loan()
    {
        return $this->belongsTo('App\Loan', 'loan_id');
    }
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}