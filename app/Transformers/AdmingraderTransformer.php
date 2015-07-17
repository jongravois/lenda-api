<?php namespace App\Transformers;

use App\Admingrader;
use League\Fractal\TransformerAbstract;

class AdmingraderTransformer extends TransformerAbstract {
    public function transform(Admingrader $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'grade' => $item->grade,
            'debt2asset' => (double) $item->debt2asset,
            'current_ratio' => (double) $item->current_ratio,
            'working_capital' => (double) $item->working_capital,
            'borrowing_capacity' => (double) $item->borrowing_capacity,
            'years_farming' => (double) $item->years_farming,
            'credit_score' => (double) $item->credit_score,
            'cpa_financials' => (boolean) $item->cpa_financials,
            'bankruptcy' => (boolean) $item->bankruptcy,
            'judgement' => (boolean) $item->judgement,
            'all_max_loan' => (double) $item->all_max_loan,
            'ag_pro_max_loan' => (double) $item->ag_pro_max_loan,
            'capital_bridge_max_loan' => (double)
            $item->capital_bridge_max_loan,
            'ag_vest_max_loan' => (double) $item->ag_vest_max_loan,
            'ag_pro_max_rate' => (double) $item->ag_pro_max_rate,
            'capital_bridge_max_rate' => (double)
            $item->capital_bridge_max_rate,
            'ag_vest_max_rate' => (double) $item->ag_vest_max_rate
        ];
    }
}