<?php

use Illuminate\Support\Facades\DB;

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
function getEstimatedInterestARM($loan) {
    $int_rate_arm = $loan->financials->int_percent_arm/100;
    $arm_commit = getTotalPartyCommit('arm', $loan->id);
    $fee = getFeeTotal($loan);
    $prin = $arm_commit + $fee;
    return 0.75 * 0.5 * $prin * $int_rate_arm;
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
        $farmexp = getTotalLoanFarmExpenses($loanID);
    } else {
        $farmexp = 0;
    }

    $crps = getCropsInLoan($loanID);
    foreach($crps as $crp) {
        $cropexp += getTotalCropCommit($party, $loanID, $crp->crops);
    }

    return $cropexp + $farmexp;
}
