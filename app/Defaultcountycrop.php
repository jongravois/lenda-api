<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Defaultcountycrop extends Model
{
    public $timestamps = false;
    protected $table = 'defaultcountycrops';
    protected $fillable = ['county_id', 'price_corn', 'price_soybeans', 'price_soybeansfac', 'price_sorghum','price_wheat','price_cotton', 'price_rice', 'price_peanuts', 'price_sugarcane', 'price_sunflowers', 'ins_price_corn', 'ins_price_soybeans', 'ins_price_soybeansfac', 'ins_price_sorghum','ins_price_wheat','ins_price_cotton', 'ins_price_rice', 'ins_price_peanuts', 'ins_price_sugarcane', 'ins_price_sunflowers', 'yield_corn_irr','yield_corn_ni','yield_soybeans_irr','yield_soybeans_ni','yield_soybeansfac_irr','yield_soybeansfac_ni','yield_sorghum_irr','yield_sorghum_ni','yield_wheat_irr','yield_wheat_ni','yield_cotton_irr','yield_cotton_ni','yield_rice_irr','yield_rice_ni','yield_peanuts_irr','yield_peanuts_ni','yield_sugarcane_irr','yield_sugarcane_ni', 'yield_sunflowers_irr','yield_sunflowers_ni'];

    /* RELATIONSHIPS */
    public function county()
    {
        return $this->belongsTo('App\County', 'county_id');
    }
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
