<?php namespace App\Transformers;

use App\Globvar;
use Carbon\Carbon;
use League\Fractal\TransformerAbstract;

class GlobvarTransformer extends TransformerAbstract {
    public function transform(Globvar $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'crop_year' => (integer) $item->crop_year,
            'season' => $item->season,
            'int_percent_arm' => (double) $item->int_percent_arm,
            'int_percent_dist' => (double) $item->int_percent_dist,
            'min_proc_fee' => (double) $item->min_proc_fee,
            'proc_fee_rate' => (double) $item->proc_fee_rate,
            'svc_fee_rate' => (double) $item->svc_fee_rate,
            'projected_crops_discount_rate' => (double) $item->projected_crops_discount_rate,
            'projected_crops_discount_rate' => (double) $item->fsa_assignment_discount_rate,
            'fsa_assignment_discount_rate' => (double) $item->projected_crops_discount_rate,
            'ins_discount_rate' => (double) $item->ins_discount_rate,
            'equipment_discount_rate' => (double) $item->equipment_discount_rate,
            'realestate_discount_rate' => (double) $item->realestate_discount_rate,
            'claims_discount_rate' => (double) $item->claims_discount_rate,
            'current_bs_constraint' => (double) $item->current_bs_constraint,
            'intermediate_bs_constraint' => (double) $item->intermediate_bs_constraint,
            'fixed_bs_constraint' => (double) $item->fixed_bs_constraint,
            'cropYears' => [
                'CY' => (integer) $item->crop_year,
                'PY1' => (integer) $item->crop_year - 1,
                'PY2' => (integer) $item->crop_year - 2,
                'PY3' => (integer) $item->crop_year - 3,
                'PY4' => (integer) $item->crop_year - 4,
                'PY5' => (integer) $item->crop_year - 5,
                'PY6' => (integer) $item->crop_year - 6
            ],
            'today' => Carbon::now()->format('m/d/Y'),
            'forward3days' => Carbon::now()->addDays(3)->format('m/d/Y'),
            'forward14days' => Carbon::now()->addDays(14)->format('m/d/Y')
        ];
    }
}