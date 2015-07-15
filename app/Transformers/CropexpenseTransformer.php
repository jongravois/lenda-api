<?php namespace App\Transformers;

use App\Cropexpense;
use League\Fractal\TransformerAbstract;

class CropexpenseTransformer extends TransformerAbstract {
    public function transform(Cropexpense $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'loan_id' => (integer) $item->loan_id,
            'crop_id' => (integer) $item->crop_id,
            //'crop' => $item->loancrop']['crop']['name,
            //'acres' => $item->loancrop']['acres,
            'cat_id' => (integer) $item->cat_id,
            'expense' => $item->expense,
            'arm' => (double) $item->arm,
            'arm_adj' => (double) $item->arm_adj,
            'dist' => (double) $item->dist,
            'dist_adj' => (double) $item->dist_adj,
            'other' => (double) $item->other,
            'other_adj' => (double) $item->other_adj
        ];
    }
}