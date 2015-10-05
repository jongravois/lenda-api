<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicantfinancial extends Model
{
    use ActivityTrait;

    protected $table = 'applicantfinancials';
    protected $fillable = ['loan_id', 'applicant_id', 'cpa_financials', 'credit_score', 'credit_points', 'grade', 'experience', 'amount_requested', 'collateral_equipment', 'collateral_realestate', 'year_1_revenue', 'year_1_expenses', 'year_2_revenue', 'year_2_expenses', 'year_3_revenue', 'year_3_expenses', 'current_assets', 'current_assets_factor', 'current_assets_liability', 'intermediate_assets', 'intermediate_assets_factor', 'intermediate_assets_liability', 'fixed_assets', 'fixed_assets_factor', 'fixed_assets_liability', 'debt2asset_ratio', 'debt2asset_ratio_adj', 'ratio_current', 'ratio_current_adj', 'capWork', 'capWork_adj', 'capBorrow', 'capBorrow_adj'];

    /* CASTS */
    protected $casts = [
        'cpa_financials' => 'boolean'
    ];
    /* CASTS */

    /* RELATIONSHIPS */
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
