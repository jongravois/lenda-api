<?php namespace App\Transformers;

use App\Optimizerviewoption;
use League\Fractal\TransformerAbstract;

class OptimizerviewoptionTransformer extends TransformerAbstract {
    public function transform(Optimizerviewoption $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'user_id' => $item->user_id,
            'rent_per_acre_ARM' => (boolean)$item->rent_per_acre_ARM,
            'rent_per_acre_dist' => (boolean)$item->rent_per_acre_dist,
            'rent_per_acre_other' => (boolean)$item->rent_per_acre_other,
            'fsa_per_acre_other' => (boolean)$item->fsa_per_acre_other,
            'ins_share' => (boolean)$item->ins_share,
            'ins_price' => (boolean)$item->ins_price,
            'ins_level' => (boolean)$item->ins_level,
            'ins_guarantee' => (boolean)$item->ins_guarantee,
            'ins_premium' => (boolean)$item->ins_premium,
            'ins_value' => (boolean)$item->ins_value,
            'ins_type' => (boolean)$item->ins_type,
            'sco_max' => (boolean)$item->sco_max,
            'prod_yield' => (boolean)$item->prod_yield,
            'prod_share' => (boolean)$item->prod_share,
            'prod_price' => (boolean)$item->prod_price,
            'var_harvest' => (boolean)$item->var_harvest,
            'rebate' => (boolean)$item->rebate,
            'prod_rev' => (boolean)$item->prod_rev,
            'prod_rev_adj' => (boolean)$item->prod_rev_adj,
            'budget_ARM' => (boolean)$item->budget_ARM,
            'budget_dist' => (boolean)$item->budget_dist,
            'budget_other' => (boolean)$item->budget_other,
            'fee_ARM' => (boolean)$item->fee_ARM,
            'commit_ARM' => (boolean)$item->commit_ARM,
            'commit_dist' => (boolean)$item->commit_dist,
            'interest_ARM' => (boolean)$item->interest_ARM,
            'interest_dist' => (boolean)$item->interest_dist,
            'interest_other' => (boolean)$item->interest_other,
            'percent_disc_crop' => (boolean)$item->percent_disc_crop,
            'percent_disc_fsa' => (boolean)$item->percent_disc_fsa,
            'percent_disc_cropins' => (boolean)$item->percent_disc_cropins,
            'percent_disc_nonrp' => (boolean)$item->percent_disc_nonrp,
            'percent_disc_sco' => (boolean)$item->percent_disc_sco,
            'disc_crop' => (boolean)$item->disc_crop,
            'disc_collateral' => (boolean)$item->disc_collateral
        ];
    }
}   