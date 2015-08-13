<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscrophail extends Model
{
    protected $table = 'inscrophails';
    protected $fillable = ['loan_id', 'crop_id', 'county_id', 'inspols_id', 'amount', 'premium', 'ins_share'];

    /* CASTING */
    protected $casts = [
        'amount' => 'double',
        'premium' => 'double',
        'share' => 'double'
    ];
    /* CASTING */

    /* RELATIONSHIPS */
    public function county()
    {
        return $this->belongsTo('App\County', 'county_id');
    }
    public function crop()
    {
        return $this->belongsTo('App\Crop', 'crop_id');
    }
    public function loan()
    {
        return $this->belongsTo('App\Loan', 'loan_id');
    }
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
