<?php

use App\Aphdb;
use App\Crop;
use App\Inspol;
use Illuminate\Support\Facades\DB;
use Underscore\Types\Arrays;
use Underscore\Types\Number;

function addAcres($lc) {
    foreach($lc as $crop) {
        $acres = 0;
        foreach($crop->practices as $practice) {
            $acres += (double)$practice->acres;
        }
        $crop['acres'] = $acres;
        $crop['crop_crop'] = $crop->crop['crop'];
        $crop['crop_name'] = $crop->crop['name'];
    }
    return $lc;
}
function committeeVote($loanID) {
    $commie = DB::select(DB::raw("SELECT SUM(CASE WHEN vote = 1 THEN 1 ELSE 0 END ) AS Approved, SUM(CASE WHEN vote_status = 'voted' THEN 1 ELSE 0 END) AS Voted , SUM(CASE WHEN vote_status = 'pending' THEN 1 ELSE 0 END) AS Pending FROM committees WHERE loan_id = {$loanID}"));

    $retro = [
        'total_approvers' => (integer)$commie[0]->Approved,
        'percent_approved' => ($commie[0]->Voted == 0 ? 0 : (integer)($commie[0]->Approved/$commie[0]->Voted * 100)),
        'committee_count' => (integer)$commie[0]->Pending + $commie[0]->Voted
    ];
    return $retro;
}
function getAreaAcres($loanID) {
    $retro = DB::select(DB::raw("SELECT r.region, s.location, s.loc_abr, p.crop_year, c.name as crop, SUM(p.acres) AS acres FROM loans l, loanpractices p, crops c, locations s, regions r
WHERE p.loan_id = {$loanID} AND p.loan_id = l.id AND p.crop_id = c.id AND l.loc_id = s.id AND l.region_id = r.id GROUP BY p.crop_year, p.crop_id, s.id, r.id ORDER BY r.region, s.location, p.crop_year, c.name"));

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
function getCountyCrops($loanID) {
    $retro = [];
    $countyCrops = DB::select(DB::raw("SELECT f.county_id, c.county, l.loan_id, l.crop_id, cr.crop, loancrop_id, SUM(l.acres) AS acres, cr.measurement AS UoM, cr.arm_default_price AS prod_price_default, cr.arm_default_ins_price AS ins_price_default, cr.tea AS TEA FROM loanpractices l LEFT JOIN farms AS f ON l.farm_id = f.id LEFT JOIN counties AS c ON f.county_id = c.id LEFT JOIN crops AS cr ON l.crop_id = cr.id WHERE l.loan_id = {$loanID} GROUP BY f.county_id, l.crop_id ORDER BY f.county_id, l.crop_id"));

    return $countyCrops;
}
function getCropAcres($loanID, $cropID)
{
    $acres = DB::select(DB::raw("SELECT SUM(acres) AS Total FROM loanpractices WHERE loan_id = {$loanID} AND crop_id = {$cropID}"));
    return $acres[0]->Total;
}
function getCropPerAcreCommit($party, $loanID, $cropID)
{
    $commit = DB::select(DB::raw("SELECT SUM({$party}_adj) AS Commit FROM cropexpenses WHERE loan_id = {$loanID} AND crop_id = {$cropID}"));
    if(! $commit[0]->Commit) {
        return 0;
    } else {
        return $commit[0]->Commit;
    }
}
function getCropIDsInLoan($loanID) {
    $crops = DB::select(DB::raw("SELECT DISTINCT(crop_id) AS crops FROM cropexpenses WHERE loan_id = {$loanID}"));
    return $crops;
}
function getCropsInLoan($loanID)
{
    $retro = [];
    $crops = DB::select(DB::raw("SELECT e.crop_id, c.crop FROM cropexpenses e, crops c WHERE c.id = e.crop_id AND e.loan_id = {$loanID} GROUP BY c.crop ORDER BY c.id"));

    foreach($crops as $crop) {
        $retro[$crop->crop_id] = $crop->crop;
    }
    return $retro;
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
function getPartyCropsCommit($loanID, $party) {
    $retro = [];

        $retro['corn'] = getCropPerAcreCommit($party, $loanID, 1);
        $retro['soybeans'] = getCropPerAcreCommit($party, $loanID, 2);
        $retro['beansFAC'] = getCropPerAcreCommit($party, $loanID, 3);
        $retro['sorghum'] = getCropPerAcreCommit($party, $loanID, 4);
        $retro['wheat'] = getCropPerAcreCommit($party, $loanID, 5);
        $retro['cotton'] = getCropPerAcreCommit($party, $loanID, 6);
        $retro['rice'] = getCropPerAcreCommit($party, $loanID, 7);
        $retro['peanuts'] = getCropPerAcreCommit($party, $loanID, 8);
        $retro['sugarcane'] = getCropPerAcreCommit($party, $loanID, 9);
        $retro['sunflowers'] = getCropPerAcreCommit($party, $loanID, 10);

    return $retro;
}
function getTotalAcres($loanID) {
    return DB::select(DB::raw("SELECT SUM(acres) AS Total FROM loanpractices WHERE loan_id = {$loanID}"));
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
function getTotalClaims($loan) {
    $claim = 0;
    foreach($loan->indyinc as $indy) {
        $claim += $indy->amount;
    }
    return $claim;
}
function getTotalCropCommit($party, $loanID, $cropID)
{
    $PACommit = getCropPerAcreCommit($party, $loanID, $cropID);
    $getCA = getCropAcres($loanID, $cropID);
    return (double)$PACommit * (double)$getCA;
}
function getTotalFSA($loan)
{
    $fsa = 0;
    foreach($loan->farms as $farm) {
        $fsa += $farm->fsa_paid;
    }
    return $fsa;
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

    $crps = getCropIDsInLoan($loanID);
    foreach($crps as $crp) {
        $cropexp += getTotalCropCommit($party, $loanID, $crp->crops);
    }

    return $cropexp + $farmexp;
}
function processFarmUnits($loan) {
    $retro = [];
    $units = $loan->farmunits;
    foreach($units as $unit) {
        $cash_rent = (double)$unit->farm->cash_rent;
        $dist_rent = (double)$unit->farm->dist_rent;
        $total_acres = (double)$unit->acres;
        $farm_acres = (double)($unit->farm->IR + $unit->farm->NI);
        $acres_percent = (double)$total_acres/$farm_acres;
        $fsa_pay = (double)$unit->farm->fsa_paid * $acres_percent;
        $newb = [
            'id' => $unit->id,
            'state' => $unit->farm->county->state->abr,
            'county' => $unit->farm->county->county,
            'fsn' => $unit->farm->fsn,
            'owner' => $unit->farm->owner,
            'practice' => $unit->practice,
            "total_acres" => $total_acres,
            "farm_acres" => $farm_acres,
            "acres_percent" => $acres_percent,
            "share_rent" => (double)$unit->farm->share_rent,
            "perm2ins" => ($unit->farm->perm_to_insure ? 'Y' : 'N'),
            "cash_rent" => $cash_rent,
            "dist_rent" => $dist_rent,
            "waived" => (double)$unit->farm->waived,
            "when_due" => $unit->farm->when_due,
            "fsa_paid" => $fsa_pay,
            "cash_rent_acre_ARM" => $cash_rent/$total_acres,
            "cash_rent_acre_dist" => $dist_rent/$total_acres,
            "cash_rent_acre_other" => 0,
            "fsa_acre" => $fsa_pay/$total_acres,
            "crops" => processFarmunitPractices($unit, $loan)
        ];
        array_push($retro, $newb);
    }

    return $retro;
}
function processFarmunitPractices($unit, $loan) {
    $loancrops = $loan->loancrops;
    $retro = [];

    foreach($loancrops as $lc) {
        $cropID = $lc->crop->id;
        $crop = $lc->crop->crop;
        $retro[$crop] = [
            "id" => $cropID,
            "crop" => $crop,
            "var_harvst" => $lc->var_harvest,
            "rebate" => $lc->rebates
        ];
        foreach($unit->practices as $upc) {
            $policy = Inspol::with('databases')
                ->where('county_id', $unit->farm->county_id)
                ->where('crop_id', $cropID)
                ->where('practice', $upc->practice)
                ->get();
            if($upc->crop_id == $cropID) {
                $retro[$crop]['acres'] = (double)$upc->acres;
                $retro[$crop]['override'] = (double)$policy[0]->databases[0]->ins_share;
                $retro[$crop]['aph'] = (double)$policy[0]->databases[0]->aph;
                $retro[$crop]['ins_type'] = $policy[0]->type;
                $retro[$crop]['ins_opts'] = $policy[0]->options;
                $retro[$crop]['ins_price'] = (double)$policy[0]->ins_price;
                $retro[$crop]['ins_level'] = (double)$policy[0]->ins_level;
                $retro[$crop]['ins_premium'] = (double)$policy[0]->premium;
                $retro[$crop]['ins_share'] = (double)$policy[0]->ins_share;
                $retro[$crop]['loss_trigger'] = (double)$policy[0]->stax_loss_trigger;
                $retro[$crop]['cov_range'] = (double)$policy[0]->stax_desired_range;
                $retro[$crop]['prot_factor'] = (double)$policy[0]->stax_protection_factor;
                $retro[$crop]['prod_yield'] = (double)$upc->prod_yield;
                $retro[$crop]['prod_share'] = (double)$upc->prod_share;
                $retro[$crop]['prod_price'] = (double)$upc->prod_price;
            } else {
                $retro[$crop]['acres'] = 0;
                $retro[$crop]['override'] = 0;
                $retro[$crop]['aph'] = 0;
                $retro[$crop]['ins_type'] = '';
                $retro[$crop]['ins_opts'] = '';
                $retro[$crop]['ins_price'] = 0;
                $retro[$crop]['ins_level'] = 0;
                $retro[$crop]['ins_premium'] = 0;
                $retro[$crop]['ins_share'] = 0;
                $retro[$crop]['loss_trigger'] = 0;
                $retro[$crop]['cov_range'] = 0;
                $retro[$crop]['prot_factor'] = 0;
                $retro[$crop]['prod_yield'] = 0;
                $retro[$crop]['prod_share'] = 0;
                $retro[$crop]['prod_price'] = 0;
            }
        }
    }
    //return $loan;
    return $retro;
}
