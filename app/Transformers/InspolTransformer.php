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
            'agent_id' => $item->agent_id,
            'county_id' => $item->county_id,
            'crop_id' => $item->crop_id,
            'practice' => $item->practice,
            'plc' => (boolean)$item->plc,
            'type' => $item->type,
            'unit' => $item->unit,
            'options' => $item->options,
            'ins_level' => (double)$item->ins_level,
            'planting_days' => (double)$item->planting_days,
            'ins_price' => (double)$item->ins_price,
            'premium' => (double)$item->premium,
            'stax_loss_trigger' => (double)$item->stax_loss_trigger,
            'stax_desired_range' => (double)$item->stax_desired_range,
            'stax_protection_factor' => (double)$item->stax_protection_factor,
        ];
    }
}