<?php

use App\Loanfinancial;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoanfinancialsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('loanfinancials')->delete();

        //2 - Ag-Input
        Loanfinancial::create([
            'loan_id' => 1,
            'collateral_equipment' => 300000,
            'collateral_realestate' => 500000,
            'fee_processing' => 1,
            'fee_service' => 1.5,
            'int_percent_arm'	=> 9,
            'int_percent_arm_default' => 9,
            'int_percent_arm_orig' => 9,
            'int_percent_dist' => 9,
            'int_percent_other' => 9
        ]);

        //Like Excel
        Loanfinancial::create([
            'loan_id' => 9,
            'fee_processing' => 1,
            'fee_service' => 1.5,
            'int_percent_arm'	=> 12,
            'int_percent_arm_default'	=> 12,
            'int_percent_arm_orig'	=> 12,
            'int_percent_dist' => 9,
            'int_percent_dist_default' => 9,
            'int_percent_dist_orig' => 9,
            'int_percent_other' => 11,
            'int_percent_other_default' => 11,
            'int_percent_other_orig' => 11
        ]);

        //5 - Capital Bridge
        Loanfinancial::create([
            'loan_id' => 2,
            'amount_requested' 	=> 570000,
            'fee_processing' => 1,
            'fee_service' => 1.5,
            'int_percent_arm'	=> 9,
            'int_percent_arm_default'	=> 9,
            'int_percent_arm_orig'	=> 9,
            'int_percent_other' => 9,
            'int_percent_other_default' => 9,
            'int_percent_other_orig' => 9
        ]);

        //4 - Ag-Pro Fasttrack
        Loanfinancial::create([
            'loan_id' => 3,
            'amount_requested' 	=> 1000000,
            'fee_processing' => 1,
            'fee_service' => 1.5,
            'int_percent_arm'	=> 9,
            'int_percent_arm_default' => 9,
            'int_percent_arm_orig' => 9,
            'int_percent_other' => 9,
            'int_percent_other_default' => 9,
            'int_percent_other_orig' => 9
        ]);

        //6 - Ag-Vest
        Loanfinancial::create([
            'loan_id' => 4,
            'amount_requested' 	=> 750000,
            'fee_service' => 4,
            'int_percent_arm' => 6,
            'int_percent_arm_default' => 6,
            'int_percent_arm_orig' => 6,
        ]);

        //3 - Ag-Pro
        Loanfinancial::create([
            'loan_id' => 5,
            'amount_requested' 	=> 1300575,
            'fee_processing' => 1,
            'fee_service' => 1.5,
            'int_percent_arm'	=> 9,
            'int_percent_arm_default'	=> 9,
            'int_percent_arm_orig'	=> 9,
            'int_percent_other' => 9,
            'int_percent_other_default' => 9,
            'int_percent_other_orig' => 9
        ]);

        //1 - All-In
        Loanfinancial::create([
            'loan_id' => 6,
            'amount_requested' 	=> 1500000,
            'fee_processing' => 1,
            'fee_service' => 1.5,
            'int_percent_arm'	=> 9,
            'int_percent_arm_default' => 9,
            'int_percent_arm_orig' => 9
        ]);

        //7 - Grain-Storage
        Loanfinancial::create([
            'loan_id' => 7,
            'amount_requested' => 200000,
            'fee_processing' => 1,
            'fee_service' => 1.5,
            'int_percent_arm'	=> 9,
            'int_percent_arm_default' => 9,
            'int_percent_arm_orig' => 9
        ]);

        //2 - Ag-Input
        Loanfinancial::create([
            'loan_id' => 8,
            'amount_requested' 	=> 675500,
            'fee_processing' => 1,
            'fee_service' => 1.5,
            'int_percent_arm'	=> 9,
            'int_percent_arm_default'	=> 9,
            'int_percent_arm_orig'	=> 9,
            'int_percent_dist' => 9,
            'int_percent_dist_default' => 9,
            'int_percent_dist_orig' => 9,
            'int_percent_other' => 9,
            'int_percent_other_default' => 9,
            'int_percent_other_orig' => 9
        ]);
    }
}
