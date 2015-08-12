<?php

use App\Loan;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoansTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('loans')->delete();

        //[1] Tony Stark(1) @ Glass Towers(1) | Partnership(4)--Ag-Input 2015
        Loan::create([
            'applicant_id' => 1,
            'app_date' => Carbon::now()->subWeek(3)->subDay(2),
            'distributor_approval_date' => Carbon::now()->subWeek(2)->subDay(4),
            'decision_date' => Carbon::now()->subWeek(2)->subDay(1),
            'default_due_date' => Carbon::createFromFormat('Y-m-d','2015-12-15'),
            'due_date' => Carbon::createFromFormat('Y-m-d','2015-12-15'),
            'loan_type_id' => 2,
            'status_id' => 1,
            'analyst_can_approve' => 1,
            'crop_year' => '2015',
            'season' => 'S',
            'loc_id' => 5,
            'region_id' => 3,
            'user_id' => 3,
            'farmer_id' => 1,
            'is_fast_tracked' => 0,
            'is_stale' => 0,
            'is_watched' => 1,
            'disbursement_issue' => 0,
            'has_distributor' => 1,
            'distributor_id' => 6,
            'has_addendum' => 1,
            'addendum_type' => 2,
            'is_cross_collateralized' => 1,
            'bankruptcy_history' => 0,
            'required_3party' => 0,
            'added_land' => 0,
            'controlled_disbursement' => 0,
            'its_list' => 1,
            'fsa_compliant' => 1,
            'crop_inspection' => 0,
            'limit_warning' => 0,
            'reconciliation' => 3,
            'account_classification' => '-',
            'grade' => '-',
            'equipment_collateral' => 1,
            'realestate_collateral' => 1,
            'other_collateral' => 1,
            'conditions_asa' => 1,
            'conditions_aci' => 1,
            'conditions_areb' => 1,
            'conditions_afsa' => 1,
            'conditions_adis' => 1,
            'conditions_pg' => 1,
            'conditions_ccl' => 0,
            'conditions_cd' => 0,
        ]);

        // Blake Donald(10) @ Rainbow Bridge(6) | Individual--Capital Bridge 2015
        Loan::create([
            'applicant_id' => 6,
            'app_date' => Carbon::now()->subWeek(),
            'default_due_date' => Carbon::createFromFormat('Y-m-d','2015-06-15'),
            'due_date' => Carbon::createFromFormat('Y-m-d','2015-06-15'),
            'loc_id' => 5,
            'user_id' => 3,
            'region_id' => 3,
            'crop_year' => '2015',
            'season' => 'S',
            'loan_type_id' => 5,
            'farmer_id' => 10,
            'analyst_can_approve' => 1,
            'is_stale' => 0,
            'is_watched' => 1,
            'disbursement_issue' => 0,
            'has_distributor' => 1,
            'distributor_id' => 6,
            'has_addendum' => 1,
            'addendum_type' => 2,
            'is_cross_collateralized' => 1,
            'bankruptcy_history' => 1,
            'required_3party' => 1,
            'added_land' => 1,
            'controlled_disbursement' => 1,
            'its_list' => 1,
            'fsa_compliant' => 1,
            'prev_lien_verified' => 1,
            'leases_valid' => 1,
            'bankruptcy_order_received' => 1,
            'received_3party' => 1,
            'recommended' => 1,
            'arm_approved' => 1,
            'dist_approved' => 1,
            'loan_closed' => 1,
            'added_land_verified' => 1,
            'permission_to_insure_verified' => 1,
            'arm_ucc_received' => 1,
            'dist_ucc_received' => 1,
            'aoi_received' => 1,
            'ccc_received' => 1,
            'crop_certified' => 1,
            'rebate_assignment' => 1,
            'crop_inspection' => 2,
            'limit_warning' => 2,
            'reconciliation' => 3,
            'account_classification' => '-',
            'grade' => '-',
            'equipment_collateral' => 1,
            'limit_warning_message' => 'Caution: 76% of budget exceeded.',
            'account_classification' => '-',
            'grade' => 'B'
        ]);

        // Bruce Wayne(2) @ Secret Cave(3) | Joint Venture (1)--Ag-Pro Fasttrack 2015
        /*Loan::create([
            'applicant_id' => 3,
            'app_date' => Carbon::now()->subDays(2),
            'default_due_date' => Carbon::createFromFormat('Y-m-d','2015-12-15'),
            'due_date' => Carbon::createFromFormat('Y-m-d','2015-12-15'),
            'loc_id' => 5,
            'user_id' => 3,
            'region_id' => 3,
            'crop_year' => '2015',
            'season' => 'S',
            'loan_type_id' => 4,
            'farmer_id' => 2,
            'limit_warning' => 2,
            'limit_warning_message' => 'Caution: Seed budget exceeded.',
            'is_stale' => 0,
            'crop_certified' => 0,
            'conditions_asa' => 1,
            'conditions_aci' => 1,
            'conditions_areb' => 1,
            'conditions_afsa' => 1,
            'conditions_adis' => 1,
            'reconciliation' => 0,
            'account_classification' => 'B',
            'grade' => 'B'
        ]);*/

        // Steve Rogers(12) @ Shielded Farms(4) | Corporation -- Ag-Vest 2015
        /*Loan::create([
            'applicant_id' => 4,
            'app_date' => Carbon::now(),
            'default_due_date' => Carbon::createFromFormat('Y-m-d','2015-12-15'),
            'due_date' => Carbon::createFromFormat('Y-m-d','2015-12-15'),
            'loc_id' => 5,
            'user_id' => 3,
            'region_id' => 3,
            'crop_year' => '2015',
            'season' => 'S',
            'loan_type_id' => 6,
            'farmer_id' => 12,
            'limit_warning' => 3,
            'limit_warning_message' => 'Warning: 97% of budget exceeded.',
            'crop_certified' => 2,
            'is_stale' => 0,
            'its_list' => 1,
            'reconciliation' => 0,
            'account_classification' => 'A',
            'grade' => 'A'

        ]);*/

        // Clint Barton(5) @ Nested Row(2) | Spousal--Ag-Pro 2015
        /*Loan::create([
            'applicant_id' => 2,
            'app_date' => Carbon::now()->subDays(3),
            'default_due_date' => Carbon::createFromFormat('Y-m-d','2015-12-15'),
            'due_date' => Carbon::createFromFormat('Y-m-d','2015-12-15'),
            'decision_date' => Carbon::now(),
            'loc_id' => 5,
            'user_id' => 3,
            'region_id' => 3,
            'crop_year' => '2015',
            'season' => 'S',
            'loan_type_id' => 3,
            'farmer_id' => 5,
            'limit_warning' => 0,
            'is_stale' => 0,
            'crop_certified' => 1,
            'conditions_asa' => 1,
            'conditions_aci' => 1,
            'conditions_areb' => 1,
            'conditions_afsa' => 1,
            'conditions_adis' => 1,
            'reconciliation' => 0,
            'account_classification' => 'C',
            'grade' => 'C'
        ]);*/

        // Matt Murdoch(9) @ Dark World(5) | Individual -- All-in 2015
        /*Loan::create([
            'applicant_id' => 5,
            'app_date' => Carbon::now()->subDays(2),
            'default_due_date' => Carbon::createFromFormat('Y-m-d','2015-12-15'),
            'due_date' => Carbon::createFromFormat('Y-m-d','2015-12-15'),
            'loc_id' => 5,
            'user_id' => 3,
            'region_id' => 6,
            'crop_year' => '2015',
            'season' => 'F',
            'loan_type_id' => 1,
            'farmer_id' => 9,
            'crop_certified' => 0,
            'limit_warning' => 0,
            'is_watched' => 1,
            'is_stale' => 0,
            'bankruptcy_history' => 1,
            'conditions_asa' => 1,
            'conditions_aci' => 1,
            'conditions_areb' => 1,
            'conditions_afsa' => 1,
            'conditions_adis' => 1,
            'reconciliation' => 3,
            'account_classification' => '-',
            'grade' => '-'
        ]);*/

        // Diana Prince(7) @ Kingdom Plains(7) | Spousal -- Grain Storage 2015
        /*Loan::create([
            'applicant_id' => 7,
            'app_date' => Carbon::now()->subDays(4),
            'default_due_date' => Carbon::createFromFormat('Y-m-d','2015-03-15'),
            'due_date' => Carbon::createFromFormat('Y-m-d','2015-04-30'),
            'loc_id' => 2,
            'user_id' => 3,
            'region_id' => 2,
            'crop_year' => '2015',
            'season' => 'S',
            'loan_type_id' => 7,
            'farmer_id' => 7,
            'crop_certified' => 0,
            'limit_warning' => 3,
            'limit_warning_message' => 'Warning: 100% of budget exceeded.',
            'is_stale' => 0,
            'its_list' => 1,
            'fsa_compliant' => 1,
            'reconciliation' => 0,
            'account_classification' => 'A',
            'grade' => 'A'
        ]);*/

        // Tony Stark(1) @ Glass Towers(1) | Partnership | Ag-Input 2014
        /*Loan::create([
            'app_date' => Carbon::createFromFormat('Y-m-d','2014-01-01'),
            'default_due_date' => Carbon::createFromFormat('Y-m-d','2014-12-15'),
            'due_date' => Carbon::createFromFormat('Y-m-d','2014-12-15'),
            'loan_type_id' => 2,
            'status_id' => 2,
            'crop_year' => '2014',
            'season' => 'F',
            'loc_id' => 5,
            'region_id' => 3,
            'user_id' => 3,
            'farmer_id' => 1,
            'applicant_id' => 2,
            'is_active' => 0,
            'is_cross_collateralized' => 0,
            'is_fast_tracked' => 0,
            'is_stale' => 0,
            'has_distributor' => 1,
            'distributor_id' => 6,
            'conditions_asa' => 1,
            'conditions_aci' => 1,
            'conditions_areb' => 1,
            'conditions_afsa' => 1,
            'conditions_adis' => 1,
            'its_list' => 1,
            'fsa_compliant' => 1,
            'prev_lien_verified' => 1,
            'leases_valid' => 1,
            'bankruptcy_order_received' => 1,
            'received_3party' => 1,
            'recommended' => 1,
            'arm_approved' => 1,
            'dist_approved' => 1,
            'loan_closed' => 1,
            'loan_closed_date' => Carbon::createFromFormat('Y-m-d','2014-08-01'),
            'added_land_verified' => 1,
            'permission_to_insure_verified' => 1,
            'arm_ucc_received' => 1,
            'dist_ucc_received' => 1,
            'aoi_received' => 1,
            'ccc_received' => 1,
            'crop_certified' => 1,
            'rebate_assignment' => 1,
            'limit_warning' => 4,
            'limit_warning_message' => '100% of budget exceeded',
            'crop_inspection' => 1,
            'reconciliation' => 0,
            'grade' => 'B'
        ]);*/

        // Matches Excel 2015
        /*Loan::create([
            'app_date' => Carbon::createFromFormat('Y-m-d','2015-02-18'),
            'default_due_date' => Carbon::createFromFormat('Y-m-d','2015-12-15'),
            'due_date' => Carbon::createFromFormat('Y-m-d','2015-12-15'),
            'loan_type_id' => 2,
            'status_id' => 1,
            'crop_year' => '2015',
            'season' => 'S',
            'loc_id' => 6,
            'region_id' => 5,
            'user_id' => 3,
            'farmer_id' => 9,
            'applicant_id' => 8,
            'is_cross_collateralized' => 0,
            'is_fast_tracked' => 0,
            'grade' => 'B',
            'equipment_collateral' => 0,
            'realestate_collateral' => 0,
            'analyst_can_approve' => 0,
            'is_watched' => 0,
            'disbursement_issue' => 0,
            'has_rebates' => 0,
            'has_distributor' => 1,
            'distributor_id' => 3,
            'is_stale' => 0,
            'has_addendum' => 0,
            //'addendum_type' => null,
            'bankruptcy_history' => 0,
            'required_3party' => 0,
            'added_land' => 0,
            'controlled_disbursement' => 0,
            'its_list' => 0,
            'fsa_compliant' => 1,
            'prev_lien_verified' => 0,
            'leases_valid' => 0,
            'bankruptcy_order_received' => 0,
            'recommended' => 0,
            'arm_approved' => 0,
            'dist_approved' => 0,
            'loan_closed' => 0,
            //'loan_closed_date' => '',
            'added_land_verified' => 0,
            'permission_to_insure_verified' => 0,
            'arm_ucc_received' => 0,
            'dist_ucc_received' => 0,
            'aoi_received' => 0,
            'ccc_received' => 0,
            'crop_certified' => 0,
            'rebate_assignment' => 0,
            'limit_warning' => 1,
            //'limit_warning_message' => '',
            'crop_inspection' => 0,
            'reconciliation' => 0,
            'account_classification' => 'C',
            'grade' => 'C',
            'conditions_asa' => 1,
            'conditions_aci' => 1,
            'conditions_areb' => 1,
            'conditions_adis' => 1,
            'conditions_pg' => 1,
            'conditions_ccl' => 1,
            'conditions_cd' => 1,
            'its_list' => 1
        ]);*/
    }
}
