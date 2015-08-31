<?php

use App\Disbursement;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DisbursementsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('disbursements')->delete();

        Disbursement::create([
            'loan_id' => 1,
            'crop_year' => '2015',
            'cat_id' => 6,
            'expense' => 'Custom',
            'arm_budget' => 84000,
            'spent' => 0,
            'requested' => 0
        ]);
        Disbursement::create([
            'loan_id' => 1,
            'crop_year' => '2015',
            'cat_id' => 7,
            'expense' => 'Fuel',
            'arm_budget' => 130000,
            'spent' => 0,
            'requested' => 0
        ]);
        Disbursement::create([
            'loan_id' => 1,
            'crop_year' => '2015',
            'cat_id' => 8,
            'expense' => 'Labor',
            'arm_budget' => 80000,
            'spent' => 0,
            'requested' => 0
        ]);
        Disbursement::create([
            'loan_id' => 1,
            'crop_year' => '2015',
            'cat_id' => 9,
            'expense' => 'Repairs',
            'arm_budget' => 50000,
            'spent' => 50000,
            'requested' => 0
        ]);
        Disbursement::create([
            'loan_id' => 1,
            'crop_year' => '2015',
            'cat_id' => 12,
            'expense' => 'Misc_Acres',
            'arm_budget' => 80000,
            'spent' => 0,
            'requested' => 0
        ]);
        Disbursement::create([
            'loan_id' => 1,
            'crop_year' => '2015',
            'cat_id' => 13,
            'expense' => 'Living Expenses',
            'arm_budget' => 50000,
            'spent' => 35000,
            'requested' => 0
        ]);
        Disbursement::create([
            'loan_id' => 1,
            'crop_year' => '2015',
            'cat_id' => 13,
            'expense' => 'Equipment',
            'arm_budget' => 23196,
            'spent' => 0,
            'requested' => 0
        ]);

        Disbursement::create([
            'loan_id' => 2,
            'crop_year' => '2015',
            'cat_id' => 6,
            'expense' => 'Custom',
            'arm_budget' => 33122,
            'spent' => 0,
            'requested' => 0
        ]);
        Disbursement::create([
            'loan_id' => 2,
            'crop_year' => '2015',
            'cat_id' => 7,
            'expense' => 'Fuel',
            'arm_budget' => 40422,
            'spent' => 0,
            'requested' => 0
        ]);
        Disbursement::create([
            'loan_id' => 2,
            'crop_year' => '2015',
            'cat_id' => 8,
            'expense' => 'Labor',
            'arm_budget' => 13474,
            'spent' => 0,
            'requested' => 0
        ]);
        Disbursement::create([
            'loan_id' => 2,
            'crop_year' => '2015',
            'cat_id' => 9,
            'expense' => 'Repairs',
            'arm_budget' => 13474,
            'spent' => 0,
            'requested' => 0
        ]);
        Disbursement::create([
            'loan_id' => 2,
            'crop_year' => '2015',
            'cat_id' => 12,
            'expense' => 'Misc_Acres',
            'arm_budget' => 47159,
            'spent' => 0,
            'requested' => 0
        ]);
    }
}
