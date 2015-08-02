<?php namespace App\Transformers;

use App\Defaultcountycrop;
use League\Fractal\TransformerAbstract;

class DefaultcountycropTransformer extends TransformerAbstract {
    public function transform(Defaultcountycrop $item)
    {
        //return $item->toArray();

        return [
            'id' => $item->id,
            'county' => $item->county->county,
            'state_id' => $item->state_id,
            'label' => $item->county->label,
            'locale' => $item->county->locale,
            'price_corn' => (double)$item->price_corn,
            'price_soybeans' => (double)$item->price_soybeans,
            'price_soybeansfac' => (double)$item->price_soybeansfac,
            'price_sorghum' => (double)$item->price_sorghum,
            'price_wheat' => (double)$item->price_wheat,
            'price_cotton' => (double)$item->price_cotton,
            'price_rice' => (double)$item->price_rice,
            'price_peanuts' => (double)$item->price_peanuts,
            'price_sugarcane' => (double)$item->price_sugarcane,
            'price_sunflowers' => (double)$item->price_sunflowers,
            'ins_price_corn' => (double)$item->ins_price_corn,
            'ins_price_soybeans' => (double)$item->ins_price_soybeans,
            'ins_price_soybeansfac' => (double)$item->ins_price_soybeansfac,
            'ins_price_sorghum' => (double)$item->ins_price_sorghum,
            'ins_price_wheat' => (double)$item->ins_price_wheat,
            'ins_price_cotton' => (double)$item->ins_price_cotton,
            'ins_price_rice' => (double)$item->ins_price_rice,
            'ins_price_peanuts' => (double)$item->ins_price_peanuts,
            'ins_price_sugarcane' => (double)$item->ins_price_sugarcane,
            'ins_price_sunflowers' => (double)$item->ins_price_sunflowers,
            'yield_corn_irr' => (double)$item->yield_corn_irr,
            'yield_corn_ni' => (double)$item->yield_corn_ni,
            'yield_soybeans_irr' => (double)$item->yield_soybeans_irr,
            'yield_soybeans_ni' => (double)$item->yield_soybeans_ni,
            'yield_soybeansfac_irr' => (double)$item->yield_soybeansfac_irr,
            'yield_soybeansfac_ni' => (double)$item->yield_soybeansfac_ni,
            'yield_sorghum_irr' => (double)$item->yield_sorghum_irr,
            'yield_sorghum_ni' => (double)$item->yield_sorghum_ni,
            'yield_wheat_irr' => (double)$item->yield_wheat_irr,
            'yield_wheat_ni' => (double)$item->yield_wheat_ni,
            'yield_cotton_irr' => (double)$item->yield_cotton_irr,
            'yield_cotton_ni' => (double)$item->yield_cotton_ni,
            'yield_rice_irr' => (double)$item->yield_rice_irr,
            'yield_rice_ni' => (double)$item->yield_rice_ni,
            'yield_peanuts_irr' => (double)$item->yield_peanuts_irr,
            'yield_peanuts_ni' => (double)$item->yield_peanuts_ni,
            'yield_sugarcane_irr' => (double)$item->yield_sugarcane_irr,
            'yield_sugarcane_ni' => (double)$item->yield_sugarcane_ni,
            'yield_sunflowers_irr' => (double)$item->yield_sunflowers_irr,
            'yield_sunflowers_ni' => (double)$item->yield_sunflowers_ni
        ];
    }
}