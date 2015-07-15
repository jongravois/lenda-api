<?php namespace App\Transformers;

use App\Disbursement;
use League\Fractal\TransformerAbstract;

class DisbursementTransformer extends TransformerAbstract {
    public function transform(Disbursement $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'loan_id' => $item->loan_id,
            'crop_year' => $item->crop_year,
            'cat_id' => (integer) $item->cat_id,
            'expense' => $item->expense,
            'arm_budget' => (double)$item->arm_budget,
            'spent' => (double)$item->spent,
            'requested' => (double)$item->requested,
            'status' => $item->status
        ];
    }
}