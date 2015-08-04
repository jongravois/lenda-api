<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    protected $table = 'loans';
    protected $fillable = ['app_date', 'decision_date', 'distributor_approval_date', 'default_due_date', 'due_date', 'loan_type_id', 'status_id', 'crop_year', 'season', 'loc_id', 'region_id', 'user_id', 'farmer_id', 'applicant_id', 'is_cross_collateralized', 'is_fast_tracked', 'grade', 'equipment_collateral', 'realestate_collateral', 'other_collateral', 'analyst_can_approve', 'is_watched', 'disbursement_issue', 'has_rebates', 'has_distributor', 'distributor', 'is_stale', 'has_addendum', 'addendum_type', 'bankruptcy_history', 'required_3party', 'added_land', 'controlled_disbursement', 'its_list', 'fsa_compliant', 'prev_lien_verified', 'leases_valid', 'bankruptcy_order_received', 'received_3party', 'recommended', 'arm_approved', 'dist_approved', 'loan_closed', 'loan_closed_date', 'added_land_verified', 'permission_to_insure_verified', 'arm_ucc_received', 'dist_ucc_received', 'aoi_received', 'ccc_received', 'crop_certified', 'rebate_assignment', 'limit_warning', 'limit_warning_message', 'crop_inspection', 'reconciliation', 'account_classification', 'conditions_asa', 'conditions_aci', 'conditions_areb', 'conditions_adis', 'conditions_pg', 'conditions_ccl', 'conditions_cd'];

    /* CASTING */
    protected $casts = [];
    /* CASTING */

    /* RELATIONSHIPS */
    public function agents()
    {
        return $this->hasMany('App\Agent', 'id');
    }
    public function analyst() {
        return $this->belongsTo('App\User', 'user_id');
    }
    public function applicants() {
        return $this->belongsTo('App\Applicant', 'applicant_id');
    }
    public function attachments() {
        return $this->hasMany('App\Attachment', 'loan_id', 'id');
    }
    public function committee() {
        return $this->hasMany('App\Committee', 'loan_id', 'id');
    }
    public function comments() {
        return $this->hasMany('App\Comment');
    }
    public function distributor() {
        return $this->hasOne('App\Distributor', 'id', 'distributor_id');
    }
    public function farmers() {
        return $this->belongsTo('App\Farmer', 'farmer_id');
    }
    public function financials() {
        return $this->hasOne('App\Loanfinancial', 'loan_id', 'id');
    }
    public function loantypes() {
        return $this->hasOne('App\Loantype', 'id', 'loan_type_id');
    }
    public function location() {
        return $this->belongsTo('App\Location', 'loc_id');
    }
    public function transactions()
    {
        return $this->hasMany('App\Qbtran');
    }
    public function quests() {
        return $this->hasOne('App\Loanquestion');
    }
    public function status() {
        return $this->hasOne('App\Loanstatus', 'id', 'status_id');
    }
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
