<?php namespace App\Transformers;

use App\Crop;
use League\Fractal\TransformerAbstract;

class CropTransformer extends TransformerAbstract {
    public function transform(Crop $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'crop' => $item->crop,
            'name' => $item->name,
            'sort_order' => (integer)$item->sort_order,
            'tea' => (double)$item->tea,
            'arm_default_price' => (double)$item->arm_default_price,
            'arm_default_ins_price' => (double)$item->arm_default_ins_price,
            'measurement' => $item->measurement,
            'rebate_measurement' => $item->rebate_measurement
        ];
    }
}