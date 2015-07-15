<?php namespace App\Transformers;

use App\Defaultcountycrop;
use League\Fractal\TransformerAbstract;

class DefaultcountycropTransformer extends TransformerAbstract {
    public function transform(Defaultcountycrop $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'county' => $item->county,
            'state_id' => $item->state_id,
            'label' => $item->label,
            'locale' => $item->locale,
            'corn_ir'	=>	[
                'price'	=>	(double) $item->price_corn_irr,
                'ins_price' => (double) $item->insured_price_corn_irr,
                'aph' => (double) $item->yield_corn_irr
            ],
            'corn_ni' => [
                'price'	=>	(double) $item->price_corn_ni,
                'ins_price' => (double) $item->insured_price_corn_ni,
                'aph' => (double) $item->yield_corn_ni
            ],
            'soybeans_ir'	=>	[
                'price'	=>	(double) $item->price_soybeans_irr,
                'ins_price' => (double) $item->insured_price_soybeans_irr,
                'aph' => (double) $item->yield_soybeans_irr
            ],
            'soybeans_ni'	=>	[
                'price'	=>	(double) $item->price_soybeans_ni,
                'ins_price' => (double) $item->insured_price_soybeans_ni,
                'aph' => (double) $item->yield_soybeans_ni
            ],
            'beansfac_ir'	=>	[
                'price'	=>	(double) $item->price_soybeans_facirr,
                'ins_price' => (double) $item->insured_price_soybeans_facirr,
                'aph' => (double) $item->yield_soybeans_facirr
            ],
            'beansfac_ni'	=>	[
                'price'	=>	(double) $item->price_soybeans_facni,
                'ins_price' => (double) $item->insured_price_soybeans_facni,
                'aph' => (double) $item->yield_soybeans_facni
            ],
            'sorghum_ir'	=>	[
                'price'	=>	(double) $item->price_sorghum_irr,
                'ins_price' => (double) $item->insured_price_sorghum_irr,
                'aph' => (double) $item->yield_sorghum_irr
            ],
            'sorghum_ni'	=>	[
                'price'	=>	(double) $item->price_sorghum_ni,
                'ins_price' => (double) $item->insured_price_sorghum_ni,
                'aph' => (double) $item->yield_sorghum_ni
            ],
            'wheat_ir'	=>	[
                'price'	=>	(double) $item->price_wheat_irr,
                'ins_price' => (double) $item->insured_price_wheat_irr,
                'aph' => (double) $item->yield_wheat_irr
            ],
            'wheat_ni'	=>	[
                'price'	=>	(double) $item->price_wheat_ni,
                'ins_price' => (double) $item->insured_price_wheat_ni,
                'aph' => (double) $item->yield_wheat_ni
            ],
            'cotton_ir'	=>	[
                'price'	=>	(double) $item->price_cotton_irr,
                'ins_price' => (double) $item->insured_price_cotton_irr,
                'aph' => (double) $item->yield_cotton_irr
            ],
            'cotton_ni'	=>	[
                'price'	=>	(double) $item->price_cotton_ni,
                'ins_price' => (double) $item->insured_price_cotton_ni,
                'aph' => (double) $item->yield_cotton_ni
            ],
            'rice_ir'	=>	[
                'price'	=>	(double) $item->price_rice_irr,
                'ins_price' => (double) $item->insured_price_rice_irr,
                'aph' => (double) $item->yield_rice_irr
            ],
            'rice_ni'	=>	[
                'price'	=>	(double) $item->price_rice_ni,
                'ins_price' => (double) $item->insured_price_rice_ni,
                'aph' => (double) $item->yield_rice_ni
            ],
            'peanuts_ir'	=>	[
                'price'	=>	(double) $item->price_peanuts_irr,
                'ins_price' => (double) $item->insured_price_peanuts_irr,
                'aph' => (double) $item->yield_peanuts_irr
            ],
            'peanuts_ni'	=>	[
                'price'	=>	(double) $item->price_peanuts_ni,
                'ins_price' => (double) $item->insured_price_peanuts_ni,
                'aph' => (double) $item->yield_peanuts_ni
            ],
            'sugarcane_ir'	=>	[
                'price'	=>	(double) $item->price_sugarcane_irr,
                'ins_price' => (double) $item->insured_price_sugarcane_irr,
                'aph' => (double) $item->yield_sugarcane_irr
            ],
            'sugarcane_ni'	=>	[
                'price'	=>	(double) $item->price_sugarcane_ni,
                'ins_price' => (double) $item->insured_price_sugarcane_ni,
                'aph' => (double) $item->yield_sugarcane_ni
            ]
        ];
    }
}