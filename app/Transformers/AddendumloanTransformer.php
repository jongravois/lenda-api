<?php namespace App\Transformers;

use App\Addendumloan;
use Carbon\Carbon;
use League\Fractal\TransformerAbstract;

class AddendumloanTransformer extends TransformerAbstract {
    public function transform(Addendumloan $item)
    {
        //return $item;

        $dtToday = Carbon::now();
        $appDate = Carbon::createFromFormat('Y-m-d', $item->app_date);
        $defaultDueDate = Carbon::createFromFormat('Y-m-d', $item->default_due_date);
        $dueDate = Carbon::createFromFormat('Y-m-d', $item->due_date);
        $diff = $dueDate->diffInDays($appDate);
        $staleDiff = $appDate->diffInDays($dtToday);
        //dd($staleDiff);

        if($item->season == 'S'){
            $fullSeason = 'Spring';
        } else {
            $fullSeason = 'Fall';
        } // end if

        if(!$item->default_due_date){
            $defaultDueDate = null;
        } else {
            $defaultDueDate = Carbon::createFromFormat('Y-m-d', $item->default_due_date)->format('m/d/Y');
        }

        if(!$item->distributor_approval_date){
            $decision = null;
        } else {
            $decision = Carbon::createFromFormat('Y-m-d', $item->distributor_approval_date)->format('m/d/Y');
        }

        //is_stale
        if(!$item->decision_date){
            $decision = null;

            if($staleDiff > 3 && $item->status_id == 1){
                $isStale = true;
            } else {
                $isStale = false;
            } // end if
        } else {
            $decision = Carbon::createFromFormat('Y-m-d', $item->decision_date)->format('m/d/Y');
            $isStale = false;
        } // end if

        return array(
            'id' =>	$item->id,
            'original_id' => $item->original_id,
            'has_addendum' => (boolean) $item->has_addendum,
            'addendum_type_id' => (integer) $item->addendum_type,
            'addendum_type' => (string) $item->addendum_type,
            'app_date'	=> 	$appDate,
            'decision_date'	=> 	$decision,
            'due_date'	=>	$dueDate,
            'default_due_date' => $defaultDueDate,
            'is_stale' => $isStale,
            'loan_days' =>	$diff,
            'loan_type_id' => $item->loan_type_id,
            'crop_year'	=>	$item->crop_year,
            'season'	=>	$item->season,
            'season_full' => $fullSeason,
            'status_id' =>	$item->status_id,
            'grade' => $item->grade,
            'user_id' => $item->user_id,
            'loc_id' => $item->loc_id,
            'region_id'	=> $item->region_id,
            'applicant_id'	=>	$item->applicant_id,
            'farmer_id'	=>	(integer) $item->farmer_id,
            'is_active' => (boolean) $item->is_active,
            'is_cross_collateralized' => (boolean) $item->is_cross_collateralized,
            'is_fast_tracked' => (boolean) $item->is_fast_tracked,
            'analyst_can_approve' => (boolean) $item->analyst_can_approve,
            'has_attachments' => (boolean) $item->has_attachments,
            'has_distributor' => (boolean) $item->has_distributor,
            'distributor_id' => $item->distributor_id,
            'distributor' => $item->distributor,
            'bankruptcy_history' =>	(boolean) $item->bankruptcy_history,
            'required_3party' => (boolean) $item->required_3party,
            'added_land' => (boolean) $item->added_land,
            'controlled_disbursement' => (boolean) $item->controlled_disbursement,
            'attachments' => (boolean) $item->attachments,
            'its_list' => (integer) $item->its_list,
            'fsa_compliant' => (integer) $item->fsa_compliant,
            'prev_lien_verified' => (integer) $item->prev_lien_verified,
            'leases_valid' => (integer) $item->leases_valid,
            'bankruptcy_order_received' => (integer) $item->bankruptcy_order_received,
            'received_3party' =>	(integer) $item->received_3party,
            'recommended' => (integer) $item->recommended,
            'arm_approved' => (integer) $item->arm_approved,
            'dist_approved' => (integer) $item->dist_approved,
            'loan_closed' => (integer) $item->loan_closed,
            'loan_closed_date' => $item->loan_closed_date,
            'arm_balance' => (integer) $item->arm_balance,
            'added_land_verified' => (integer) $item->added_land_verified,
            'arm_ucc_received' => (integer) $item->arm_ucc_received,
            'dist_ucc_received' => (integer) $item->dist_ucc_received,
            'aoi_received' => (integer) $item->aoi_received,
            'ccc_received' => (integer) $item->ccc_received,
            'rebate_assignment' => (integer) $item->rebate_assignment,
            'limit_warning' => (integer) $item->limit_warning,
            'crop_inspection' => (integer) $item->crop_inspection,
            'reconciliation' => (integer) $item->reconciliation,
            'account_classification' => (integer) $item->account_classification,
            'last_activity' => $item->updated_at,
            'fins' => $item->fins
        );
    }
}