<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loanquestion extends Model
{
    protected $table = 'loanquestions';
    protected $fillable = ['app_date', 'decision_date', 'distributor_approval_date', 'default_due_date', 'due_date', 'loan_type_id', 'status_id', 'crop_year', 'season', 'loc_id', 'region_id', 'user_id', 'farmer_id', 'applicant_id', 'is_cross_collateralized', 'is_fast_tracked', 'grade', 'equipment_collateral', 'realestate_collateral', 'other_collateral', 'analyst_can_approve', 'is_watched', 'disbursement_issue', 'has_rebates', 'has_distributor', 'distributor', 'is_stale', 'has_addendum', 'addendum_type', 'bankruptcy_history', 'required_3party', 'added_land', 'controlled_disbursement', 'its_list', 'fsa_compliant', 'prev_lien_verified', 'leases_valid', 'bankruptcy_order_received', 'received_3party', 'recommended', 'arm_approved', 'dist_approved', 'loan_closed', 'loan_closed_date', 'added_land_verified', 'permission_to_insure_verified', 'arm_ucc_received', 'dist_ucc_received', 'aoi_received', 'ccc_received', 'rebate_assignment', 'limit_warning', 'limit_warning_message', 'crop_inspection', 'reconciliation', 'account_classification', 'conditions_asa', 'conditions_aci', 'conditions_areb', 'conditions_adis', 'conditions_pg', 'conditions_ccl', 'conditions_cd'];

    /* RELATIONSHIPS */
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
