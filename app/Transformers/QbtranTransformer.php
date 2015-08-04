<?php namespace App\Transformers;

use League\Fractal\TransformerAbstract;

class QbtranTransformer extends TransformerAbstract {
    public function transform(Qbtran $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'transaction_id' => $item->transaction_id,
            'loan_id' => $item->loan_id,
            'user_id' => $item->user_id,
            'qb_date' => $item->qb_date,
            'qb_type' => $item->qb_type,
            'cat_id' => $item->cat_id,
            'qb_description' => $item->qb_description,
            'qb_amount' => (double)$item->qb_amount,
            'qb_cat_balance' => (double)$item->qb_cat_balance,
            'qb_total_budget' => (double)$item->qb_total_budget,
            'qb_total_spent' => (double)$item->qb_total_spent,
            'qb_trans_status' => $item->qb_trans_status
        ];
    }
}