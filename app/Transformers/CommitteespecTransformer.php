<?php namespace App\Transformers;

use App\Committeespec;
use League\Fractal\TransformerAbstract;

class CommitteespecTransformer extends TransformerAbstract {
    public function transform(Committeespec $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'loantype_id' => $item->loantype_id,
            'min_amount' => (double)$item->min_amount,
            'max_amount' => (double)$item->max_amount,
            'min_debt_asset' => (double)$item->min_debt_asset,
            'max_debt_asset' => (double)$item->max_debt_asset,
            'min_loan_asset' => (double)$item->min_loan_asset,
            'max_loan_asset' => (double)$item->max_loan_asset,
            'applicant_grade' => $item->applicant_grade,
            'member_count' => (integer)$item->member_count
        ];
    }
}