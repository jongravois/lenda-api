<?php namespace App\Transformers;

use App\Plannedcrop;
use League\Fractal\TransformerAbstract;

class PlannedcropTransformer extends TransformerAbstract {
    public function transform(Plannedcrop $item)
    {
        //return $item->toArray();

        return [
            'id' => $item->id,
            'loan_id' => $item->loan_id,
            'crop_id' => $item->crop_id,
            'crop' => $item->crop,
            'acres' => (double)$item->acres,
            'tea' => (double)$item->tea
        ];
    }
}