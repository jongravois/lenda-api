<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscrophail extends Model
{
    use ActivityTrait;

    protected $table = 'inscrophails';
    protected $fillable = ['loan_id', 'crop_id', 'county_id', 'inspols_id', 'amount', 'premium'];

    /* CASTING */
    protected $casts = [
        'amount' => 'double',
        'premium' => 'double'
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
