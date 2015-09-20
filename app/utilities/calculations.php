<?php

use App\Aphdb;
use App\Crop;
use App\Crosscollateral;
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
function calcAllCropValue($loan) {
    if($loan[0]) {
        $loan = $loan[0];
    } else {
        $loan = $loan;
    }
    $cropIncome = 0;
    $value = DB::select(DB::raw("SELECT sum(lp.acres * lp.prod_yield * lp.prod_price * (lp.prod_share/100)) AS val, lp.acres, lp.prod_yield, lp.prod_price, lc.bkqty, lc.bkprice, lc.var_harvest, lc.rebates FROM loanpractices lp JOIN loancrops lc ON lc.crop_id = lp.crop_id WHERE lp.loan_id = {$loan->id} GROUP BY lp.crop_id"));
    foreach($value as $val) {
        $cropIncome += $val->val + (((double)$val->bkprice - (double)$val->prod_price) * (double)$val->bkqty) + ((double)$val->acres * (double)$val->prod_yield * ((double)$val->var_harvest * -1));
    }
    return $cropIncome;
}
function calcCashFlow($loan) {
    if($loan[0]) {
        $loan = $loan[0];
    } else {
        $loan = $loan;
    }
    $cropIncome = calcAllCropValue($loan);
    $fsa = $loan->fins['total_fsa_pay'];
    $other = $loan->fins['total_claims'];
    $feeRateTotal = (double)$loan->fins['fee_processing'] + (double)$loan->fins['fee_service'];
    $armRate = (double)$loan->fins['int_percent_arm'];
    $distRate = (double)$loan->fins['int_percent_dist'];

    $totalProjectedIncome = (double)$cropIncome + (double)$fsa + (double)$other;
    $totalCommittment = ((double)getTotalPartyCommit('arm', $loan->id) + (double)getFeeTotal($loan, $feeRateTotal) + (double)getARMInterest($loan, $armRate)) + ((double)getTotalPartyCommit('dist', $loan->id) + (double)getDistInterest($loan, $distRate)) + (double)getTotalPartyCommit('other', $loan->id);


    return $totalProjectedIncome - $totalCommittment;
}
function calcCropTotal($cropID, $loan) {
    //(acres * prod_yield * price * prod_share/100)
    // + ((bkprice - prod_price) * bkqty)
    // + (acres * prod_yield * (harvest * -1))
    $loanID = $loan->id;
    $cropVal = DB::select(DB::raw("SELECT acres * prod_yield * prod_price * (prod_share/100) AS val FROM loanpractices WHERE loan_id = {$loanID} AND crop_id = {$cropID}"));
    $booked = 0;
    $hvst = 0;

    $total = (double)$cropVal[0]->val + (double)$booked + (double)$hvst;
    return $total;
}
function calcInsOverYield($cropID, $loan) {
    $policies = $loan->databases;
    $insValue = 0;
    foreach($policies as $p) {
        if($p->crop_id == $cropID) {
            $insValue += (double)$p->value;
        }
    }

    $cropValue = DB::select(DB::raw("SELECT sum(lp.acres * lp.prod_yield * lp.prod_price * (lp.prod_share/100)) AS val, lp.acres, lp.prod_yield, lp.prod_price, lc.bkqty, lc.bkprice, lc.var_harvest, lc.rebates FROM loanpractices lp JOIN loancrops lc ON lc.crop_id = lp.crop_id WHERE lp.loan_id = {$loan->id} AND lp.crop_id = {$cropID}"));;

    $total = $insValue - ((double)$cropValue[0]->val * ((100 - $loan->fins['discounts']['percent_crop'])/100));
    return $total;
}
function calcLoanExposure($loan) {
    if($loan[0]) {
        $loan = $loan[0];
    } else {
        $loan = $loan;
    }
    // Total Collateral = DiscCrops + DiscFSA + DiscInsOverCrops + YP_Coverage + SupCoverage + Equipment + RealEstate + Other
    $discCrops = (double)calcAllCropValue($loan) * $loan->fins['discounts']['percent_crop'];
    $discFSA = (double)getTotalFSA($loan) * $loan->fins['discounts']['percent_fsa'];
    $discInsOverYield = (double)calcTotalInsOverYield($loan);
    //TODO
    $discYPCoverage = 0; //any yp coverage's valye * disc ((ins_level * ins_price * aph) - premium))
    $discSupCoverage = 0; //???
    // /TODO
    $discEquipment = getDiscCollateralTotal('equipment', $loan);
    $discRealEstate = getDiscCollateralTotal('realestate', $loan);
    $discOther = getDiscCollateralTotal('other', $loan);

    $feeRateTotal = (double)$loan->fins['fee_processing'] + (double)$loan->fins['fee_service'];
    $armRate = (double)$loan->fins['int_percent_arm'];
    $distRate = (double)$loan->fins['int_percent_dist'];

    $totalCollateral = (double)$discCrops + (double)$discFSA + (double)$discInsOverYield + (double)$discYPCoverage + (double)$discSupCoverage + (double)$discEquipment + (double)$discRealEstate + (double)$discOther;
    $totalCommitment = ((double)getTotalPartyCommit('arm', $loan->id) + (double)getFeeTotal($loan, $feeRateTotal) + (double)getARMInterest($loan, $armRate)) + ((double)getTotalPartyCommit('dist', $loan->id) + (double)getDistInterest($loan, $distRate));
    $exposure = (double)$totalCollateral - (double)$totalCommitment;
    return $exposure;
}
function calcTotalInsOverYield($loan) {
    $total = 0;
    $crps = getCropIDsInLoan($loan->id);
    foreach($crps as $crp) {
        $total += calcInsOverYield($crp->crops, $loan);
    }
    return $total;
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
function getARMInterest($loan, $rate) {
    $arm_commit = getTotalPartyCommit('arm', $loan->id);
    $est_days = (double)$loan->est_days;

    $calc = (double)$rate/100 * ($est_days/365) * $arm_commit;

    return $calc;
}
function getARMInterestAlt($commit, $days, $rate) {
    $calc = (double)$rate/100 * ((double)$days/365) * (double)$commit;

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
        array_push($retro, $crop->crop);
    }
    return $retro;
}
function getCropSupIns($loanID) {
    $stax = DB::select(DB::raw("SELECT SUM((stax_desired_range/100) * (stax_protection_factor/100) * ins_price * exp_yield) AS StaxVal  FROM inspols WHERE loan_id = {$loanID} AND OPTIONS = 'STAX'"));
    $staxVal = (double)$stax[0]->StaxVal;

    $sco = DB::select(DB::raw("SELECT SUM((stax_desired_range/100) * ins_price * exp_yield) AS ScoVal  FROM inspols WHERE loan_id = {$loanID} AND OPTIONS = 'SCO'"));
    $scoVal = (double)$sco[0]->ScoVal;

    return $staxVal + $scoVal;
}
function getDiscCollateralTotal($type, $loan) {
    if($loan[0]) {
        $loan = $loan[0];
    } else {
        $loan = $loan;
    }

    $collateral = [];
    if(is_array($loan->other_collateral)) {
        foreach($loan['other_collateral'] as $oc) {
            if($oc['type'] == $type) {
                array_push($collateral, $c);
            }
        }
    }

    $total = 0;
    if(is_array($collateral)) {
        foreach($collateral as $col) {
            $total += (double)$col->amount * (double)((100 - $col->discount)/100);
        }
    }

    return $total;
}
function getDistInterest($loan, $distRate) {
    $dist_commit = getTotalPartyCommit('dist', $loan->id);
    $est_days = (double)$loan->loantypes->est_days;

    $calc = $distRate/100 * ($est_days/365) * $dist_commit;
    return $calc;
}
function getDistInterestAlt($commit, $days, $rate) {
    $calc = (double)$rate/100 * ((double)$days/365) * (double)$commit;

    return $calc;
}
function getFeeProc($loan)
{
    $arm_commit = getTotalPartyCommit('arm', $loan->id);
    $dist_commit = getTotalPartyCommit('dist', $loan->id);
    $total_fee_percent = ($loan->financials->fee_processing + $loan->financials->fee_service)/100;
    $cTerms = count($loan->terms);

    if($loan->terms[$cTerms]->fee_onTotal) {
        return ($arm_commit + $dist_commit) * $total_fee_percent;
    } else {
        return $arm_commit * $total_fee_percent;
    }
}
function getFeeProc_armAndDist($loan, $rate)
{
    $arm_commit = getTotalPartyCommit('arm', $loan->id);
    $dist_commit = getTotalPartyCommit('dist', $loan->id);

    $calc = ($arm_commit + $dist_commit) * $rate/100;
    //TODO: get from globals
    if($calc < 350) {
        return 350;
    } else {
        return $calc;
    }
}
function getFeeProc_armOnly($loan, $rate)
{
    $arm_commit = getTotalPartyCommit('arm', $loan->id);

    $calc = $arm_commit * $rate/100;
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
    $cTerms = count($loan->terms);

    if($loan->terms[$cTerms]->fee_onTotal) {
        return ($arm_commit + $dist_commit) * $total_fee_percent;
    } else {
        return $arm_commit * $total_fee_percent;
    }
}
function getFeeService_armAndDist($loan, $rate)
{
    $arm_commit = getTotalPartyCommit('arm', $loan->id);
    $dist_commit = getTotalPartyCommit('dist', $loan->id);

    return ($arm_commit + $dist_commit) * $rate/100;
}
function getFeeService_armOnly($loan, $rate)
{
    $arm_commit = getTotalPartyCommit('arm', $loan->id);

    return $arm_commit * $rate/100;
}
function getFeeTotal($loan, $total_fee_percent)
{
    $arm_commit = getTotalPartyCommit('arm', $loan->id);
    $dist_commit = getTotalPartyCommit('dist', $loan->id);
    $cTerms = count($loan->terms);

    if($loan->terms[$cTerms]['fee_onTotal']) {
        return ($arm_commit + $dist_commit) * $total_fee_percent/100;
    } else {
        return $arm_commit * $total_fee_percent/100;
    }
}
function getFeeTotal_armAndDist($loan)
{
    $arm_commit = getTotalPartyCommit('arm', $loan->id);
    $dist_commit = getTotalPartyCommit('dist', $loan->id);
    $total_fee_percent = ($loan->financials['fee_processing'] + $loan->financials['fee_service'])/100;

    return ($arm_commit + $dist_commit) * $total_fee_percent;
}
function getFeeTotal_armOnly($loan)
{
    $arm_commit = getTotalPartyCommit('arm', $loan->id);
    $total_fee_percent = ($loan->financials['fee_processing'] + $loan->financials['fee_service'])/100;

    return $arm_commit * $total_fee_percent;
}
function getInsuranceCropSummaryByLoan($loanID) {
    return DB::select(DB::raw("SELECT i.id, i.crop_id, c.name, type as ins_type, unit, options as ins_opts, AVG(ins_level) AS ins_level, AVG(ins_share) AS ins_share, AVG(planting_days) AS planting_days, AVG(ins_price) AS ins_price, AVG(premium) AS premium, AVG(exp_yield) AS exp_yield, AVG(stax_loss_trigger) AS stax_loss_trigger, AVG(stax_desired_range) AS stax_desired_range, AVG(stax_protection_factor) AS stax_protection_factor FROM inspols AS i JOIN crops AS c ON i.crop_id = c.id WHERE i.id IN (SELECT DISTINCT(inspol_id) FROM aphdbs WHERE loan_id = {$loanID}) GROUP BY i.crop_id"));

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
function getOtherCollateralValueAndDiscount($loan) {
    return DB::select(DB::raw("SELECT type, SUM(mkt_value) AS marketval, SUM(mkt_value * ((100 - discount)/100)) AS discounted FROM othercollaterals WHERE loan_id = 1 GROUP BY type;"));
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
function getPlannedCropTea($cropID) {
    $tea = DB::select(DB::raw("SELECT SUM(arm_adj) AS Total FROM defaultexpenses WHERE crop_id = {$cropID}"));
    return $tea[0]->Total;
}
function getPlannedCrops($loan) {
    $retro = [];
    $crops = Crop::get(['id', 'crop', 'name']);

    // loop and get acres
    foreach($crops as $crop) {
        $newbie = [
            'id' => $crop->id,
            'crop' => $crop->crop,
            'name' => $crop->name,
            'acres' => (double)getCropAcres($loan->id, $crop->id),
            'tea' => (double)getPlannedCropTea($crop->id)
        ];
        array_push($retro, $newbie);
    }
    return $retro;
}
function getPriorLienTotal($loanID) {
    $val = DB::select(DB::raw("SELECT SUM(lien_amount) AS Total FROM priorliens WHERE loan_id = {$loanID}"));
    return $val[0]->Total;
}
function getSupIns($loanID) {
    $stax = DB::select(DB::raw("SELECT SUM((stax_desired_range/100) * (stax_protection_factor/100) * ins_price * exp_yield) AS StaxVal  FROM inspols WHERE loan_id = {$loanID} AND OPTIONS = 'STAX'"));
    $staxVal = (double)$stax[0]->StaxVal;

    $sco = DB::select(DB::raw("SELECT SUM((stax_desired_range/100) * ins_price * exp_yield) AS ScoVal  FROM inspols WHERE loan_id = {$loanID} AND OPTIONS = 'SCO'"));
    $scoVal = (double)$sco[0]->ScoVal;

    return $staxVal + $scoVal;
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
function getTotalIndirectIncome($loan) {
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
function getXCols($loanID) {
    $xc = DB::select(DB::raw("SELECT l.id, l.app_date, l.farmer_id, f.farmer, f.email, f.ssn, l.applicant_id, a.applicant, a.ssn, l.distributor_id, distributor, l.status_id FROM loans AS l JOIN farmers AS f ON f.id = l.farmer_id  JOIN applicants AS a ON a.id = l.applicant_id  LEFT JOIN distributors AS d  ON d.id = l.distributor_id WHERE l.id IN (SELECT collateral_id FROM crosscollaterals WHERE loan_id = {$loanID})"));
    return $xc;
}
function processAddendum($loanID) {
    $adds = DB::select(DB::raw("SELECT al.id, al.addendum_type, al.loan_type_id , al.app_date, lt.abr, al.status_id, s.status, al.farmer_id, f.farmer, al.applicant_id , a.applicant, af.principal_arm, af.principal_dist, af.fee_total, af.arm_and_dist, af.principal FROM addendumloans AS al JOIN addendumfinancials AS af ON al.id = af.addendumloan_id JOIN loantypes AS lt ON al.loan_type_id = lt.id JOIN loanstatus AS s ON al. status_id = s.id JOIN farmers AS f ON al.farmer_id = f.id JOIN applicants AS a ON al.applicant_id = a.id WHERE al.original_id = {$loanID}"));
    return $adds;
}
function processAPHDBS($loan) {
    $processed = [];
    $dbs = $loan->databases;
    foreach($dbs as $d) {
        $processor = [
            'id' => $d->id,
            'inspol_id' => $d->inspol_id,
            'county_id' => $d->inspols->county_id,
            'crop_id' => $d->inspols->crop_id,
            'practice' => $d->inspols->practice,
            'type' => $d->inspols->type,
            'unit' => $d->inspols->unit,
            'options' => $d->inspols->options,
            'ins_share' => (double)$d->ins_share,
            'acres' => (double)$d->acres,
            'aph' => (double)$d->aph,
            'ins_level' => (double)$d->inspols->ins_level,
            'ins_price' => (double)$d->inspols->ins_price,
            'premium' => (double)$d->inspols->premium,
            'planting_days' => (integer)$d->planting_days,
            'exp_yield' => (double)$d->exp_yield,
            'stax_loss_trigger' => (double)$d->stax_loss_trigger,
            'stax_desired_range' => (double)$d->stax_desired_range,
            'stax_protection_factor' => (double)$d->stax_protection_factor,
            'mcpi' => (double)$d->inspols->ins_level * (double)$d->inspols->ins_price * (double)$d->aph,
            'value' => ((((double)$d->inspols->ins_level * (double)$d->inspols->ins_price * (double)$d->aph) - (double)$d->inspols->premium) * (double)$d->ins_share/100 * (double)$d->acres)
        ];
        array_push($processed, $processor);
    }
    //return $dbs;
    return $processed;
}
function processFarmUnit($unit, $loan) {
    $cash_rent = (double)$unit->farm->cash_rent;
    $dist_rent = (double)$unit->farm->dist_rent;
    $total_acres = (double)$unit->acres;
    $farm_acres = (double)($unit->farm->IR + $unit->farm->NI);
    $acres_percent = (double)$total_acres/$farm_acres;
    $fsa_pay = (double)$unit->farm->fsa_paid * $acres_percent;

    $retro = [
       'id' => $unit->id,
       'state' => $unit->farm->county->state->abr,
       'county' => $unit->farm->county->county,
        'fsn' => $unit->farm->fsn,
        'owner' => $unit->farm->owner,
        'practice' => $unit->practice,
        'total_acres' => $total_acres,
        'farm_acres' => $farm_acres,
        'acres_percent' => $acres_percent,
        'rent_ovr' => (double)$unit->farm->share_rent,
        'share_rent' => (double)$unit->farm->share_rent,
        'perm2ins' => ($unit->farm->perm_to_insure ? 'Y' : 'N'),
        'cash_rent' => $cash_rent,
        'dist_rent' => $dist_rent,
        'waived' => (double)$unit->farm->waived,
        'when_due' => $unit->farm->when_due,
        'fsa_paid' => $fsa_pay,
        'cash_rent_acre_ARM' => $cash_rent/$total_acres,
        'cash_rent_acre_dist' => $dist_rent/$total_acres,
        'cash_rent_acre_other' => 0,
        'fsa_acre' => $fsa_pay/$total_acres,
        'waived_acre' => (double)$unit->farm->waived/$total_acres,
        'crops' => []
    ];

    foreach($unit->practices as $upc) {
        foreach($loan->loancrops as $lc) {
            $cropID = $lc->crop->id;
            $crop = $lc->crop->crop;

            $lp = App\Loanpractice::where('farmunit_id', $unit->id)
                ->where('crop_id', $cropID)
                ->first();

            $policy = Inspol::with('databases')
                ->where('county_id', $unit->farm->county_id)
                ->where('crop_id', $cropID)
                ->where('practice', $upc->practice)
                ->first();

            $newb[$crop] = [
                'id' => $cropID,
                'crop' => $crop,
                'practice' => $upc->practice,
                'acres' => (double)$lp['acres'],
                'var_harvst' => (double)$lc->var_harvest,
                'rebate' => (double)$lc->rebates,
                'prod_yield' => (double)$lp['prod_yield'],
                'prod_share' => (double)$lp['prod_share'],
                'prod_price' => (double)$lp['prod_price'],
                'aph' => (double)(count($policy['databases']) > 0 ? $policy['databases'][0]['aph'] : 0),
                'override' => (double)$policy['ins_share'],
                'ins_share' => (double)(count($policy['databases']) > 0 ? $policy['databases'][0]['ins_share'] : 0),
                'ins_type' => $policy['type'],
                'ins_opts' => $policy['options'],
                'ins_level' => (double)$policy['ins_level'],
                'ins_price' => (double)$policy['ins_price'],
                'ins_premium' => (double)$policy['premium'],
                'PLC' => (boolean)$policy['plc'],
                'loss_trigger' => (double)$policy['stax_loss_trigger'],
                'cov_range' => (double)$policy['stax_desired_range'],
                'prot_factor' => (double)$policy['stax_protection_factor'],
                'cov_err_check' => (double)$policy['ins_level'] + (double)$policy['stax_desired_range'],
                'exp_yield' => (double)$policy['exp_yield'],
                'planting_days' => (integer)$policy['planting_days']
            ];
        }
    }
    array_push($retro['crops'], $newb);

    return $retro;
}
function processFarmUnits($loan) {
    $retro = [];
    $units = $loan->farmunits;
    //dd($units);
    foreach( $units as $unit) {
        array_push($retro, processFarmUnit($unit, $loan));
    }
    return $retro;
}
