<?php namespace App\Transformers;

use App\Defaultexpense;
use League\Fractal\TransformerAbstract;

class DefaultexpenseTransformer extends TransformerAbstract {
    public function transform(Defaultexpense $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'region_id' => (double)$item->region_id,
            'location_id' => (double)$item->location_id,
            'crop_id' => (double)$item->crop_id,
            'loancrop_id' => (double)$item->loancrop_id,
            'cat_id' => (double)$item->cat_id,
            'expense' => $item->expense,
            'arm' => (double)$item->arm,
            'arm_adj' => (double)$item->arm_adj,
            'dist' => (double)$item->dist,
            'dist_adj' => (double)$item->dist_adj,
            'other' => (double)$item->other,
            'other_adj' => (double)$item->other_adj
        ];
    }
}