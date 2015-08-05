<?php namespace App\Transformers;

use App\Unitpractice;
use League\Fractal\TransformerAbstract;

class UnitpracticeTransformer extends TransformerAbstract {
    public function transform(Unitpractice $item)
    {
        //return $item->toArray();

        return [
            'id' => $item->id,
            'crop_year' => (integer) $item->crop_year,
            'loan_id' => (integer) $item->loan_id,
            'unit_id' => (integer)$item->unit_id,
            'crop_id' => (integer) $item->crop_id,
            //'crop' => $item->crop'][0]['crop,
            //'name' => $item->crop'][0]['name,
            'towhom_market' => $item->towhom_market,
            'gin_mill' => $item->gin_mill,
            'share_rent' => $item->share_rent,
            'acres' => (double) $item->acres,
            'irrigated' => (boolean) $item->irrigated,
            'ins_type' => $item->ins_type,
            'ins_option' => $item->ins_option,
            'ins_price' => (double) $item->ins_price,
            'ins_level' => (double) $item->ins_level,
            'aph' => (double) $item->aph,
            'ins_premium' => (double) $item->ins_premium,
            'ins_share' => (double) $item->ins_share,
            'mill_share' => (double) $item->mill_share,
            'prod_share' => (double) $item->prod_share,
            'prod_yield' => (double) $item->prod_yield,
            'prod_price' => (double) $item->prod_price,
            'bkqty' => (double) $item->bkqty,
            'bkprice' => (double) $item->bkprice,
            'harvest' => (double) $item->harvest,
            'rebates' => (double) $item->rebates,
            'crop_disc' => (double)$item->crop_disc,
            'fsa_disc' => (double)$item->fsa_disc,
            'cropins_disc' => (double)$item->cropins_disc,
            'nonrp_disc' => (double)$item->nonrp_disc,
            'sco_disc' => (double)$item->sco_disc
        ];
    }
}