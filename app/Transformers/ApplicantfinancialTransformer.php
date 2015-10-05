<?php namespace App\Transformers;

use App\Applicantfinancial;
use League\Fractal\TransformerAbstract;

class ApplicantfinancialTransformer extends TransformerAbstract {
    public function transform(Applicantfinancial $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'loan_id' => (integer) $item->loan_id,
            'applicant_id' => (integer) $item->applicant_id,
            'cpa_financials' => (boolean) $item->cpa_financials,
            'bankruptcy' => (boolean) $item->bankruptcy,
            'judgements' => (boolean) $item->judgements,
            'credit_score' => (double) $item->credit_score,
            'credit_points' => (double) $item->credit_points,
            'experience' => (double) $item->experience,
            'grade' => $item->grade,
            'amount_requested' => (double) $item->amount_requested,
            'year_1_revenue' => (double) $item->year_1_revenue,
            'year_1_expenses' => (double) $item->year_1_expenses,
            'year_2_revenue' => (double) $item->year_2_revenue,
            'year_2_expenses' => (double) $item->year_2_expenses,
            'year_3_revenue' => (double) $item->year_3_revenue,
            'year_3_expenses' => (double) $item->year_3_expenses,
            'current_assets' => (double) $item->current_assets,
            'current_assets_factor' => (double) $item->current_assets_factor,
            'current_assets_liability' => (double) $item->current_assets_liability,
            'intermediate_assets' => (double) $item->intermediate_assets,
            'intermediate_assets_factor' => (double) $item->intermediate_assets_factor,
            'intermediate_assets_liability' => (double) $item->intermediate_assets_liability,
            'fixed_assets' => (double) $item->fixed_assets,
            'fixed_assets_factor' => (double) $item->fixed_assets_factor,
            'fixed_assets_liability' => (double) $item->fixed_assets_liability,
            'debt2asset_ratio' => (double) $item->debt2asset_ratio,
            'debt2asset_ratio_adj' => (double) $item->debt2asset_ratio_adj,
            'ratio_current' => (double) $item->ratio_current,
            'ratio_current_adj' => (double) $item->ratio_current_adj,
            'capWork' => (double) $item->capWork,
            'capWork_adj' => (double) $item->capWork_adj,
            'capBorrow' => (double) $item->capBorrow,
            'capBorrow_adj' => (double) $item->capBorrow_adj
        ];
    }
}