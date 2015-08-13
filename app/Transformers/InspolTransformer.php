<?php namespace App\Transformers;

use App\Inspol;
use League\Fractal\TransformerAbstract;

class InspolTransformer extends TransformerAbstract {
    public function transform(Inspol $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'loan_id' => $item->loan_id,
            'databases' => $item->databases,
            'agent_id' => $item->agent_id,
            'agent' => $item->agent,
            'county_id' => $item->county_id,
            'county' => $item->county,
            'crop_id' => $item->crop_id,
            'crop' => $item->crop,
            'practice' => $item->practice,
            'plc' => (boolean)$item->plc,
            'type' => $item->type,
            'unit' => $item->unit,
            'options' => $item->options,
            'ins_level' => (double)$item->ins_level,
            'ins_share' => (double)$item->ins_share,
            'planting_days' => (double)$item->planting_days,
            'ins_price' => (double)$item->ins_price,
            'premium' => (double)$item->premium,
            'stax_loss_trigger' => (double)$item->stax_loss_trigger,
            'stax_desired_range' => (double)$item->stax_desired_range,
            'stax_protection_factor' => (double)$item->stax_protection_factor
        ];
    }
}