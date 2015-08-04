<?php namespace App\Transformers;

use App\Loan;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use League\Fractal\TransformerAbstract;

class LoanTransformer extends TransformerAbstract {
    public function transform(Loan $item)
    {
        //return $item->toArray();

        $hasAttachments = false;
        $dtToday = Carbon::now();
        $appDate = Carbon::createFromFormat('Y-m-d', $item->app_date);
        $defaultDueDate = $item->default_due_date;
        $dueDate = Carbon::createFromFormat('Y-m-d', $item->due_date);
        $diff = $dueDate->diffInDays($appDate);
        $staleDiff = $appDate->diffInDays($dtToday);
        //dd($staleDiff);

        //is_stale
        if (!$item->decision_date) {
            $decision = null;

            if ($staleDiff > 3 && $item->status_id == 1) {
                $isStale = true;
            } else {
                $isStale = false;
            } // end if
        } else {
            $isStale = false;
            $staleDiff = 0;
        } // end if

        //has_attachments
        if( count($item->attachments) > 0) {
            $hasAttachments = true;
        }

        // Calculations for fins object
        $total_acres = getTotalAcres($item->id);
        $commitArm = getTotalPartyCommit('arm', $item->id);
        $commitDist = getTotalPartyCommit('dist', $item->id);
        $commitOther = getTotalPartyCommit('other', $item->id);

        return [
            'corps' => $item->corps,
            'id' => $item->id,
            'account_classification' => $item->account_classification,
            'added_land' => (boolean)$item->added_land,
            'added_land_verified' => (integer)$item->added_land_verified,
            'addendum_type' => (integer)$item->addendum_type,
            'agencies' => getLoanAgencies($item->id),
            'analyst' => $item->analyst->name,
            'analyst_can_approve' => (boolean)$item->analyst_can_approve,
            'analyst_abr' => $item->analyst->nick,
            'analyst_email' => $item->analyst->email,
            'analyst_id' => $item->analyst->id,
            'aoi_received' => (integer)$item->aoi_received,
            'app_date' => ($item->app_date ? Carbon::createFromFormat('Y-m-d', $item->app_date)->format('m/d/Y') : ''),
            'applicant' => $item->applicants,
            'arm_approved' => (integer)$item->arm_approved,
            'arm_ucc_received' => (integer)$item->arm_ucc_received,
            'attachments' => $item->attachments,
            'bankruptcy_history' => (boolean)$item->bankruptcy_history,
            'bankruptcy_order_received' => (integer)$item->bankruptcy_order_received,
            'ccc_received' => (integer)$item->ccc_received,
            'committee' => $item->committee,
            'comments' => $item->comments,
            'conditions_aci' => (boolean)$item->conditions_aci,
            'conditions_adis' => (boolean)$item->conditions_adis,
            'conditions_afsa' => (boolean)$item->conditions_afsa,
            'conditions_areb' => (boolean)$item->conditions_areb,
            'conditions_asa' => (boolean)$item->conditions_asa,
            'conditions_cd' => (boolean)$item->conditions_cd,
            'conditions_ccl' => (boolean)$item->conditions_ccl,
            'conditions_pg' => (boolean)$item->conditions_pg,
            'controlled_disbursement' => (boolean)$item->controlled_disbursement,
            'corps' => $item->corps,
            'crop_certified' => (integer)$item->crop_certified,
            'crop_inspection' => (integer)$item->crop_inspection,
            'crop_year' => (integer) $item->crop_year,
            'decision_date' => ($item->decision_date ? Carbon::createFromFormat('Y-m-d', $item->decision_date)->format('m/d/Y') : ''),
            'default_due_date' => ($item->default_due_date ? Carbon::createFromFormat('Y-m-d', $item->default_due_date)->format('m/d/Y') : ''),
            'dist_approved' => (integer)$item->dist_approved,
            'disbursement_issue' => (boolean)$item->disbursement_issue,
            'distributor' => ($item->distributor ? $item->distributor : []),
            'dist_ucc_received' => (integer)$item->dist_ucc_received,
            'due_date' => ($item->due_date ? Carbon::createFromFormat('Y-m-d', $item->due_date)->format('m/d/Y') : ''),
            'equipment_collateral' => (boolean)$item->equipment_collateral,
            'farmer' => $item->farmers,
            'financials' => $item->financials,
'fsa_compliant' => (integer)$item->fsa_compliant,
            'full_season' => ($item->season == 'F' ? 'Fall' : 'Spring'),
            'grade' => $item->grade,
            'has_addendum' => (boolean)$item->has_addendum,
            'has_attachments' => $hasAttachments,
            'has_distributor' => (boolean)$item->has_distributor,
            'is_active' => (boolean)$item->is_active,
            'is_cross_collateralized' => (boolean)$item->is_cross_collateralized,
            'is_fast_tracked' => (boolean)$item->is_fast_tracked,
            'is_stale' => (boolean)$isStale,
            'is_watched' => (boolean)$item->is_watched,
            'its_list' => (integer)$item->its_list,
            'leases_valid' => (integer)$item->leases_valid,
            'limit_warning' => (integer)$item->limit_warning,
            'limit_warning_message' => $item->limit_warning_message,
            'loan_closed' => (integer)$item->loan_closed,
            'loan_closed_date' => ($item->loan_closed_date ? Carbon::createFromFormat('Y-m-d', $item->loan_closed_date)->format('m/d/Y') : ''),
            'loan_type' => $item->loantypes->loantype,
            'loan_type_id' => (integer)$item->loan_type_id,
            'loantype_abr' => $item->loantypes->abr,
            'location' => $item->location,
            'loc_abr' => $item->location->loc_abr,
            'joints' => $item->joints,
            'other_collateral' => (boolean)$item->other_collateral,
            'partners' => $item->partners,
            'permission_to_insure_verified' => (integer)$item->permission_to_insure_verified,
            'prev_lien_verified' => (integer)$item->prev_lien_verified,
            'quests' => $item->quests,
            'references' => $item->references,
            'realestate_collateral' => (boolean)$item->realestate_collateral,
            'rebate_assignment' => (integer)$item->rebate_assignment,
            'received_3party' => (integer)$item->received_3party,
            'recommended' => (integer)$item->recommended,
            'reconciliation' => (integer)$item->reconciliation,
            'region' => $item->location->regions->region,
            'required_3party' => (boolean)$item->required_3party,
            'season' => $item->season,
            'status' => $item->status,
            'transactions' => $item->transactions,

            'fins' => [
                'discounts' => [
                    'percent_crop' => (double)$item->financials->disc_percent_crop,
                    'percent_fsa' => (double)$item->financials->disc_percent_fsa,
                    'percent_ins' => (double)$item->financials->disc_percent_ins,
                    'percent_insoyield' => (double)$item->financials->disc_percent_insoyield,
                    'percent_nonrp' => (double)$item->financials->disc_percent_nonrp,
                    'percent_rphpe' => (double)$item->financials->disc_percent_rphpe,
                    'percent_suppins' => (double)$item->financials->disc_percent_suppins,
                    'percent_prod' => (double)$item->financials->disc_percent_prod,
                    'percent_equipment' => (double)$item->financials->disc_percent_equipment,
                    'percent_realestate' => (double)$item->financials->disc_percent_realestate,
                    'percent_other' => (double)$item->financials->disc_percent_other
                ],
                'adjExposure' => 6000, //TODO: Hard coded
                'balance_remaining' => 123.95, //TODO: disbursements table?
                'cash_flow' => 99999999, //TODO: Hard coded
                'commit_arm' => $commitArm,
                'commit_dist' => $commitDist,
                'commit_other' => $commitOther,
                'commit_total' => (double)$commitArm+(double)$commitDist,
                'crop_acres' => [
                    'corn' => (double)getCropAcres($item->id, 1),
                    'soybeans' => (double)getCropAcres($item->id, 2),
                    'beansFAC' => (double)getCropAcres($item->id, 3),
                    'sorghum' => (double)getCropAcres($item->id, 4),
                    'wheat' => (double)getCropAcres($item->id, 5),
                    'cotton' => (double)getCropAcres($item->id, 6),
                    'rice' => (double)getCropAcres($item->id, 7),
                    'peanuts' => (double)getCropAcres($item->id, 8),
                    'sugarcane' => (double)getCropAcres($item->id, 9),
                    'sunflowers' => (double)getCropAcres($item->id, 10)
                ],
                'exposure' => 8282, //TODO: Hard coded
                'fee_processing' => (double)$item->financials->fee_processing,
                'fee_processing_onTotal' => (boolean)$item->financials->fee_processing_onTotal,
                'fee_service' =>(double)$item->financials->fee_service,
                'fee_service_onTotal' => (boolean)$item->financials->fee_service_onTotal,
                'fee_total' => getFeeTotal($item),
                'fee_onTotal' => (boolean)$item->fee_onTotal,
                'int_arm' => getARMInterest($item),
                'int_dist' => getDistInterest($item),
                'int_percent_arm' => (double)$item->financials->int_percent_arm,
                'int_percent_dist' => (double)$item->financials->int_percent_dist,
                'proc_fee' => getFeeProc_armAndDist($item),
                'proc_fee_arm_only' => getFeeProc_armOnly($item),
                'qb_amount' => 5000000, //TODO: Hard coded
                'quests' => $item->quests,
                'srvc_fee' => getFeeService_armAndDist($item),
                'srvc_fee_arm_only' => getFeeService_armOnly($item),
                'total_farm_expenses' => (double)getTotalLoanFarmExpenses($item->id),
                'total_fee_percent' => (double)$item->financials->fee_processing + (double)$item->financials->fee_service,
                'total_acres' => (double)$total_acres[0]->Total
            ]
        ];
    }
}