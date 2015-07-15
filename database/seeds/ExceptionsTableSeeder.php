<?php

use App\Exception;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExceptionsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('exceptions')->delete();

        Exception::create([
            'title' => 'firstTimeFarmer',
            'message'	=>	'Applicant has a year or less of farming history'
        ]);

        Exception::create([
            'title' => 'farmerHistory',
            'message'	=>	'Applicant has less than 3 years of farming history.'
        ]);

        Exception::create([
            'title' => 'outstandingLoan',
            'message'	=>	'Applicant has outstanding loans at ARM.'
        ]);

        Exception::create([
            'title' => 'previousAddendum',
            'message'	=>	'Applicant utilized loan addendums in previous year:'
        ]);

        Exception::create([
            'title' => 'plantOwn',
            'message'	=>	'Applicant does not plant his own crops.'
        ]);

        Exception::create([
            'title' => 'harvestOwn',
            'message'	=>	'Applicant does not harvest his own crop.'
        ]);

        Exception::create([
            'title' => 'equipmentObligations',
            'message'	=>	'Applicant does not have all equipment obligations met.'
        ]);

        Exception::create([
            'title' => 'cashOutlayProvisions',
            'message'	=>	'Applicant has not made provisions for all cash outlays.'
        ]);

        Exception::create([
            'title' => 'fsaGoodStanding',
            'message'	=>	'Applicant is not in good standing with FSA.'
        ]);

        Exception::create([
            'title' => 'fmaGoodStanding',
            'message'	=>	'Applicant is not in good standing with Federal Crop Insurance (RMA).'
        ]);

        Exception::create([
            'title' => 'pastDuePremiums',
            'message'	=>	'Applicant has Crop Insurance premiums past due.'
        ]);

        Exception::create([
            'title' => 'isDefendant',
            'message'	=>	'Applicant is defendant in legal actions.'
        ]);

        Exception::create([
            'title' => 'outstandingJudgement',
            'message'	=>	'Applicant has judgements outstanding.'
        ]);

        Exception::create([
            'title' => 'bankruptcyHistory',
            'message'	=>	'Applicant has been previously involved in a bankruptcy.'
        ]);

        Exception::create([
            'title' => 'bankruptcyOrder',
            'message'	=>	'This loan requires a Banruptcy Order to incur debt.'
        ]);

        Exception::create([
            'title' => 'outstandingLiens',
            'message'	=>	'There are outstanding liens on the mortgaged crop.'
        ]);

        Exception::create([
            'title' => 'contractualObligations',
            'message'	=>	'There are outstanding contractual obligations.'
        ]);

        Exception::create([
            'title' => 'notGradeA',
            'message'	=>	"Applicant is rated less than as an 'A'"
        ]);

        Exception::create([
            'title' => 'thirdPartyCredit',
            'message'	=>	'Third Party Credit other than Interest was utilized.'
        ]);

        Exception::create([
            'title' => 'bookedCrops',
            'message'	=>	'More crop was booked than was insured (acres x APH x level)'
        ]);

        Exception::create([
            'title' => 'producesPeanuts',
            'message'	=>	'This loan includes the production of peanuts.'
        ]);

        Exception::create([
            'title' => 'producesSugarCane',
            'message'	=>	'This loan includes the production of sugar cane.'
        ]);

        Exception::create([
            'title' => 'yieldHistory',
            'message'	=>	'No actual yield history existed - T-yield was used'
        ]);

        Exception::create([
            'title' => 'cashRentWaivers',
            'message'	=>	'Cash Rent waivers were utilized.'
        ]);

        Exception::create([
            'title' => 'variableHarvesting',
            'message'	=>	'Variable harvesting expenses was utilized.'
        ]);

        Exception::create([
            'title' => 'rentExpenses',
            'message'	=>	'Certain farms have no rent expense allocated.'
        ]);

        Exception::create([
            'title' => 'cropBreakEven',
            'message'	=>	'Applicant has yield history that is less than break-even'
        ]);

        Exception::create([
            'title' => 'nonstandardDueDate',
            'message'	=>	'Due Date is non-standard.'
        ]);

        Exception::create([
            'title' => 'nonstandardCropDiscount',
            'message'	=>	'Projected crops discount rate used is non-standard.'
        ]);

        Exception::create([
            'title' => 'nonstandardFsaAssignment',
            'message'	=>	'FSA assignment discount rate used is non-standard.'
        ]);

        Exception::create([
            'title' => 'nonstandardCropInsuranceDiscount',
            'message'	=>	'Crop Insurance discount rate used is non-standard.'
        ]);

        Exception::create([
            'title' => 'nonstandardEquipmentDiscount',
            'message'	=>	'Equipment discount rate used is non-standard.'
        ]);

        Exception::create([
            'title' => 'nonstandardRealEstateDiscount',
            'message'	=>	'Real-Estate discount rate used is non-standard.'
        ]);

        Exception::create([
            'title' => 'nonstandardClaimsDiscount',
            'message'	=>	'Claims discount rate used is non-standard.'
        ]);

        Exception::create([
            'title' => 'nonstandardServiceFee',
            'message'	=>	'Service Fee is non-standard'
        ]);

        Exception::create([
            'title' => 'serviceFeeNotOnTotal',
            'message'	=>	'Service Fee is not charged on the total commitment.'
        ]);

        Exception::create([
            'title' => 'nonstandardProcessingFee',
            'message'	=>	'Processing Fee is non-standard'
        ]);

        Exception::create([
            'title' => 'processingFeeNotOnTotal',
            'message'	=>	'Processing Fee is not charged on the total commitment'
        ]);

        Exception::create([
            'title' => 'nonstandardArmInterest',
            'message'	=>	'ARM Interest Rate is non-standard.'
        ]);

        Exception::create([
            'title' => 'differingInterestRates',
            'message'	=>	'ARM Interest Rate and Distributor Interest Rate are not the same.'
        ]);

        Exception::create([
            'title' => 'nonRPInsurance',
            'message'	=>	'Crop Insurance other than RP is being used.'
        ]);

        Exception::create([
            'title' => 'cropInsuranceShare',
            'message'	=>	'Crop Insurance share used is greater than the applicants share of operation'
        ]);

        Exception::create([
            'title' => 'wholeFarmExpenses',
            'message'	=>	'Whole farm expenses have been utilized and not directly allocated for each crop.'
        ]);

        Exception::create([
            'title' => 'noGuarantors',
            'message'	=>	'Personal Guarantees are being relied upon by this loan.'
        ]);

        Exception::create([
            'title' => 'equipmentCollateral',
            'message'	=>	'This loan relies upon equipment as collateral.'
        ]);

        Exception::create([
            'title' => 'realEstateCollateral',
            'message'	=>	'This loan relies upon real estate as collateral.'
        ]);

        Exception::create([
            'title' => 'insuranceClaimCollateral',
            'message'	=>	'This loan relies upon outstanding Crop Insurance Claims as collateral.'
        ]);

        Exception::create([
            'title' => 'negativeCashFlow',
            'message'	=>	'Loan has negative cash flow.'
        ]);

        Exception::create([
            'title' => 'riskMargin',
            'message'	=>	"Loan's Risk Margin is less than 5% or Loans Risk Margin is less than 0."
        ]);

        Exception::create([
            'title' => 'insufficientValueARM',
            'message'	=>	'The crop insurance forecaset plus FSA payments do not exceed the value of ARM Commitment.'
        ]);

        Exception::create([
            'title' => 'insufficientValueTotal',
            'message'	=>	'The crop insurance forecast plus FSA payments do not exceed the value of Total Commitment'
        ]);

        Exception::create([
            'title' => 'balanceSheetLessArm',
            'message'	=>	"The balance sheet shows less Net Worth than the ARM Commitment"
        ]);

        Exception::create([
            'title' => 'balanceSheetNetWorth',
            'message'	=>	"The Balance Sheet shows negative net worth."
        ]);

        Exception::create([
            'title' => 'crossCollateralized',
            'message'	=>	'This is a cross-collateralized loan.'
        ]);

        Exception::create([
            'title' => 'controlledDisbursment',
            'message'	=>	'This is a controlled disbursement loan.'
        ]);
    }
}
