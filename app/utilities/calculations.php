<?php

use App\Crop;
use Illuminate\Support\Facades\DB;

function committeeVote($loanID) {
    $commie = DB::select(DB::raw("SELECT SUM(CASE WHEN vote = 1 THEN 1 ELSE 0 END ) AS Approved, SUM(CASE WHEN vote_status = 'voted' THEN 1 ELSE 0 END) AS Voted , SUM(CASE WHEN vote_status = 'pending' THEN 1 ELSE 0 END) AS Pending FROM committees WHERE loan_id = {$loanID}"));

    $retro = [
        'total_approvers' => (integer)$commie[0]->Approved,
        'percent_approved' => ($commie[0]->Voted == 0 ? 0 : (integer)($commie[0]->Approved/$commie[0]->Voted * 100)),
        'committee_count' => (integer)$commie[0]->Pending + $commie[0]->Voted
    ];
    return $retro;
}
function getAllCropAcres($loanID) {
    $retro = [];
    $crops = Crop::get(['id', 'crop']);

    // loop and get acres
    foreach($crops as $crop) {
       $newbie = [
            'id' => $crop->id,
            'crop' => $crop->crop,
            'acres' => (double)getCropAcres($loanID, $crop->id)
       ];
        array_push($retro, $newbie);
    }
    return $retro;
}
function getARMInterest($loan) {
    $arm_commit = getTotalPartyCommit('arm', $loan->id);
    $total_int_percent = $loan->financials->int_percent_arm/100;

    $calc = 0.375 * $arm_commit * $total_int_percent;
    return $calc;
}
function getCropAcres($loanID, $cropID)
{
    $acres = DB::select(DB::raw("SELECT SUM(acres) AS Total FROM farmpractices WHERE loan_id = {$loanID} AND crop_id = {$cropID}"));
    return $acres[0]->Total;
}
function getCropPerAcreCommit($party, $loanID, $cropID)
{
    $commit = DB::select(DB::raw("SELECT SUM({$party}_adj) AS Commit FROM cropexpenses WHERE loan_id = {$loanID} AND crop_id = {$cropID}"));
    return $commit[0]->Commit;
}
function getCropsInLoan($loanID)
{
    $crops = DB::select(DB::raw("SELECT DISTINCT(crop_id) AS crops FROM cropexpenses WHERE loan_id = {$loanID}"));
    return $crops;
}
function getDistInterest($loan) {
    $dist_commit = getTotalPartyCommit('dist', $loan->id);
    $total_int_percent = $loan->financials->int_percent_dist/100;

    $calc = 0.375 * $dist_commit * $total_int_percent;
    return $calc;
}
function getFeeProc($loan)
{
    $arm_commit = getTotalPartyCommit('arm', $loan->id);
    $dist_commit = getTotalPartyCommit('dist', $loan->id);
    $total_fee_percent = ($loan->financials->fee_processing + $loan->financials->fee_service)/100;

    if($loan->financials->fee_onTotal) {
        return ($arm_commit + $dist_commit) * $total_fee_percent;
    } else {
        return $arm_commit * $total_fee_percent;
    }
}
function getFeeProc_armAndDist($loan)
{
    $arm_commit = getTotalPartyCommit('arm', $loan->id);
    $dist_commit = getTotalPartyCommit('dist', $loan->id);
    $total_fee_percent = $loan->financials->fee_processing/100;

    $calc = ($arm_commit + $dist_commit) * $total_fee_percent;
    //TODO: get from globals
    if($calc < 350) {
        return 350;
    } else {
        return $calc;
    }
}
function getFeeProc_armOnly($loan)
{
    $arm_commit = getTotalPartyCommit('arm', $loan->id);
    $dist_commit = getTotalPartyCommit('dist', $loan->id);
    $total_fee_percent = $loan->financials->fee_processing/100;

    $calc = $arm_commit * $total_fee_percent;
    //TODO: get from globals
    if($calc < 350) {
        return 350;
    } else {
        return $calc;
    }

}
function getFeeService($loan)
{
    $arm_commit = getTotalPartyCommit('arm', $loan->id);
    $dist_commit = getTotalPartyCommit('dist', $loan->id);
    $total_fee_percent = $loan->financials->fee_service/100;

    if($loan->financials->fee_onTotal) {
        return ($arm_commit + $dist_commit) * $total_fee_percent;
    } else {
        return $arm_commit * $total_fee_percent;
    }
}
function getFeeService_armAndDist($loan)
{
    $arm_commit = getTotalPartyCommit('arm', $loan->id);
    $dist_commit = getTotalPartyCommit('dist', $loan->id);
    $total_fee_percent = $loan->financials->fee_service/100;

    return ($arm_commit + $dist_commit) * $total_fee_percent;
}
function getFeeService_armOnly($loan)
{
    $arm_commit = getTotalPartyCommit('arm', $loan->id);
    $dist_commit = getTotalPartyCommit('dist', $loan->id);
    $total_fee_percent = $loan->financials->fee_service/100;

    return $arm_commit * $total_fee_percent;
}
function getFeeTotal($loan)
{
    $arm_commit = getTotalPartyCommit('arm', $loan->id);
    $dist_commit = getTotalPartyCommit('dist', $loan->id);
    $total_fee_percent = ($loan->financials->fee_processing + $loan->financials->fee_service)/100;

    if($loan->financials->fee_onTotal) {
        return ($arm_commit + $dist_commit) * $total_fee_percent;
    } else {
        return $arm_commit * $total_fee_percent;
    }
}
function getFeeTotal_armAndDist($loan)
{
    $arm_commit = getTotalPartyCommit('arm', $loan->id);
    $dist_commit = getTotalPartyCommit('dist', $loan->id);
    $total_fee_percent = ($loan->financials->fee_processing + $loan->financials->fee_service)/100;

    return ($arm_commit + $dist_commit) * $total_fee_percent;
}
function getFeeTotal_armOnly($loan)
{
    $arm_commit = getTotalPartyCommit('arm', $loan->id);
    $dist_commit = getTotalPartyCommit('dist', $loan->id);
    $total_fee_percent = ($loan->financials->fee_processing + $loan->financials->fee_service)/100;

    return $arm_commit * $total_fee_percent;
}
function getLoanAgencies($loanID) {
    $agencies = DB::select(DB::raw("SELECT y.agency FROM agencies y LEFT JOIN agents t ON t.agency_id = y.id WHERE t.id IN (SELECT DISTINCT(i.agent_id) FROM inspols i WHERE loan_id = {$loanID})"));
    $cnt = count($agencies);

    switch($cnt) {
        case 0:
            $aggies = '';
            break;
        case 1:
            $aggies = $agencies[0]->agency;
            break;
        default:
            $aggies = implode(', ', array_map(function($c) {
                return $c->agency;
            }, $agencies));
            break;
    }

    return $aggies;
}
function getTotalAcres($loanID) {
    return DB::select(DB::raw("SELECT SUM(IR) + SUM(NI) AS Total FROM farmunits WHERE farm_id IN (SELECT id FROM farms WHERE loan_id = {$loanID})"));
}
function getArmTotalBudget($loanID) {
    $val = DB::select(DB::raw("SELECT SUM(arm_budget) AS Total FROM disbursements WHERE loan_id = {$loanID}"));
    return $val[0]->Total;
}
function getArmTotalRemaining($loanID) {
    $val = DB::select(DB::raw("SELECT (SUM(arm_budget) - SUM(spent)) AS Total FROM disbursements WHERE loan_id = {$loanID}"));
    return $val[0]->Total;
}
function getArmTotalSpent($loanID) {
    $val = DB::select(DB::raw("SELECT SUM(spent) AS Total FROM disbursements WHERE loan_id = {$loanID}"));
    return $val[0]->Total;
}
function getTotalClaims($loanID) {
    //TODO: Hard Coded
    return 0;
}
function getTotalCropCommit($party, $loanID, $cropID)
{
    $PACommit = getCropPerAcreCommit($party, $loanID, $cropID);
    $getCA = getCropAcres($loanID, $cropID);
    return (double)$PACommit * (double)$getCA;
}
function getTotalLoanFarmExpenses($loanID)
{
    $exp = DB::select(DB::raw("SELECT SUM(cost) AS Total FROM farmexpenses WHERE loan_id = {$loanID}"));
    return $exp[0]->Total;
}
function getTotalPartyCommit($party, $loanID)
{
    $cropexp = 0;
    if($party == 'arm') {
        $farmexp = getTotalLoanFarmExpenses($loanID); //73196
    } else {
        $farmexp = 0;
    }

    $crps = getCropsInLoan($loanID);
    foreach($crps as $crp) {
        $cropexp += getTotalCropCommit($party, $loanID, $crp->crops);
    }

    return $cropexp + $farmexp;
}
