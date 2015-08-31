<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    protected $table = 'loans';
    protected $fillable = ['app_date', 'decision_date', 'distributor_approval_date', 'default_due_date', 'due_date', 'loan_type_id', 'status_id', 'crop_year', 'season', 'loc_id', 'region_id', 'user_id', 'farmer_id', 'applicant_id', 'is_xcolled', 'is_fast_tracked', 'grade', 'equipment_collateral', 'realestate_collateral', 'other_collateral', 'analyst_can_approve', 'analyst_can_submit', 'is_watched', 'disbursement_issue', 'has_rebates', 'has_distributor', 'distributor_id', 'is_stale', 'has_addendum', 'addendum_type', 'bankruptcy_history', 'required_3party', 'added_land', 'controlled_disbursement', 'its_list', 'fsa_compliant', 'prev_lien_verified', 'leases_valid', 'bankruptcy_order_received', 'received_3party', 'recommended', 'arm_approved', 'dist_approved', 'loan_closed', 'loan_closed_date', 'added_land_verified', 'permission_to_insure_verified', 'lien_letter_received', 'arm_ucc_received', 'dist_ucc_received', 'aoi_received', 'ccc_received', 'crop_certified', 'rebate_assignment', 'limit_warning', 'limit_warning_message', 'crop_inspection', 'reconciliation', 'account_classification', 'conditions_asa', 'conditions_aci', 'conditions_areb', 'conditions_adis', 'conditions_pg', 'conditions_ccl', 'conditions_cd'];

    /* CASTING */
    protected $casts = [
        'is_xcolled' => 'boolean',
        'is_fast_tracked' => 'boolean',
        'equipment_collateral' => 'boolean',
        'realestate_collateral' => 'boolean',
        'other_collateral' => 'boolean',
        'analyst_can_approve' => 'boolean',
        'analyst_can_submit' => 'boolean',
        'is_watched' => 'boolean',
        'disbursement_issue' => 'boolean',
        'has_rebates' => 'boolean',
        'has_distributor' => 'boolean',
        'is_stale' => 'boolean',
        'has_addendum' => 'boolean',
        'bankruptcy_history' => 'boolean',
        'required_3party' => 'boolean',
        'added_land' => 'boolean',
        'controlled_disbursement' => 'boolean',
        'its_list' => 'integer',
        'fsa_compliant' => 'integer',
        'prev_lien_verified' => 'integer',
        'leases_valid' => 'integer',
        'bankruptcy_order_received' => 'integer',
        'received_3party' => 'integer',
        'recommended' => 'integer',
        'arm_approved' => 'integer',
        'dist_approved' => 'integer',
        'loan_closed' => 'integer',
        'added_land_verified' => 'integer',
        'permission_to_insure_verified' => 'integer',
        'lien_letter_received' => 'integer',
        'arm_ucc_received' => 'integer',
        'dist_ucc_received' => 'integer',
        'aoi_received' => 'integer',
        'ccc_received' => 'integer',
        'crop_certified' => 'integer',
        'rebate_assignment' => 'integer',
        'limit_warning' => 'integer',
        'crop_inspection' => 'integer',
        'reconciliation' => 'integer'
    ];
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
    public function conditions() {
        return $this->hasMany('App\Loancondition', 'loan_id', 'id');
    }
    public function corps() {
        return $this->hasMany('App\Corporation', 'loan_id', 'id');
    }
    public function crophail() {
        return $this->hasMany('App\Inscrophail');
    }
    public function databases() {
        return $this->hasMany('App\Aphdb');
    }
    public function disbursements() {
        return $this->hasMany('App\Disbursement', 'loan_id', 'id');
    }
    public function discounts() {
        return $this->hasOne('App\Loandisc');
    }
    public function distributor() {
        return $this->hasOne('App\Distributor', 'id', 'distributor_id');
    }
    public function exceptions() {
        return $this->hasMany('App\Loanexception', 'loan_id', 'id');
    }
    public function expenses() {
        return $this->hasMany('App\Cropexpense', 'loan_id', 'id');
    }
    public function farmers() {
        return $this->belongsTo('App\Farmer', 'farmer_id');
    }
    public function farmexpenses() {
        return $this->hasMany('App\Farmexpense', 'loan_id', 'id');
    }
    public function farms() {
        return $this->hasMany('App\Farm', 'loan_id', 'id');
    }
    public function farmunits() {
        return $this->hasMany('App\Farmunit');
    }
    public function financials() {
        return $this->hasOne('App\Loanfinancial', 'loan_id', 'id');
    }
    public function indyinc() {
        return $this->hasMany('App\Indirectcropincome');
    }
    public function inspols() {
        return $this->hasMany('App\Inspol', 'loan_id', 'id');
    }
    public function joints() {
        return $this->hasMany('App\Jointventure', 'loan_id', 'id');
    }
    public function loancrops() {
        return $this->hasMany('App\Loancrop', 'loan_id', 'id');
    }
    public function loandistributor() {
        return $this->hasOne('App\Loandistributor', 'distributor_id', 'distributor_id');
    }
    public function loantypes() {
        return $this->hasOne('App\Loantype', 'id', 'loan_type_id');
    }
    public function location() {
        return $this->belongsTo('App\Location', 'loc_id');
    }
    public function othercollateral() {
        return $this->hasMany('App\Othercollateral', 'loan_id', 'id');
    }
    public function partners() {
        return $this->hasMany('App\Partner', 'loan_id', 'id');
    }
    public function priorliens() {
        return $this->hasMany('App\Priorlien', 'loan_id', 'id');
    }
    public function quests() {
        return $this->hasOne('App\Loanquestion', 'loan_id', 'id');
    }
    public function references() {
        return $this->hasMany('App\Reference', 'loan_id', 'id');
    }
    public function status() {
        return $this->hasOne('App\Loanstatus', 'id', 'status_id');
    }
    public function systemics() {
        return $this->hasMany('App\Activity');
    }
    public function transactions() {
        return $this->hasMany('App\Qbtran');
    }
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
