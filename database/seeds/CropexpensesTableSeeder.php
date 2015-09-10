<?php

use App\Cropexpense;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CropexpensesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('cropexpenses')->delete();

        Cropexpense::create([
            'loan_id' => 1,
            'crop_id' => 1,
            'loancrop_id' => 1,
            'cat_id' => 1,
            'expense' => 'Fertilizer',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 162.27,
            'dist_adj' => 162.27,
            'other' => 0,
            'other_adj' => 0
        ]);

        Cropexpense::create([
            'loan_id' => 1,
            'crop_id' => 1,
            'loancrop_id' => 1,
            'cat_id' => 2,
            'expense' => 'Seed',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 126,
            'other_adj' => 126
        ]);

        Cropexpense::create([
            'loan_id' => 1,
            'crop_id' => 1,
            'loancrop_id' => 1,
            'cat_id' => 3,
            'expense' => 'Fungicide',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);

        Cropexpense::create([
            'loan_id' => 1,
            'crop_id' => 1,
            'loancrop_id' => 1,
            'cat_id' => 4,
            'expense' => 'Herbicide',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 47.19,
            'dist_adj' => 47.19,
            'other' => 0,
            'other_adj' => 0
        ]);

        Cropexpense::create([
            'loan_id' => 1,
            'crop_id' => 1,
            'loancrop_id' => 1,
            'cat_id' => 5,
            'expense' => 'Insecticide',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 7.20,
            'dist_adj' => 7.20,
            'other' => 0,
            'other_adj' => 0
        ]);

        Cropexpense::create([
            'loan_id' => 1,
            'crop_id' => 1,
            'loancrop_id' => 1,
            'cat_id' => 6,
            'expense' => 'Custom',
            'arm' => 20.50,
            'arm_adj' => 20.50,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);

        Cropexpense::create([
            'loan_id' => 1,
            'crop_id' => 1,
            'loancrop_id' => 1,
            'cat_id' => 7,
            'expense' => 'Fuel',
            'arm' => 30,
            'arm_adj' => 30,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);

        Cropexpense::create([
            'loan_id' => 1,
            'crop_id' => 1,
            'loancrop_id' => 1,
            'cat_id' => 8,
            'expense' => 'Labor',
            'arm' => 10,
            'arm_adj' => 10,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);

        Cropexpense::create([
            'loan_id' => 1,
            'crop_id' => 1,
            'loancrop_id' => 1,
            'cat_id' => 9,
            'expense' => 'Repairs',
            'arm' => 10,
            'arm_adj' => 10,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);

        Cropexpense::create([
            'loan_id' => 1,
            'crop_id' => 1,
            'loancrop_id' => 1,
            'cat_id' => 10,
            'expense' => 'Insurance',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);

        Cropexpense::create([
            'loan_id' => 1,
            'crop_id' => 1,
            'loancrop_id' => 1,
            'cat_id' => 11,
            'expense' => 'Harvesting',
            'arm' => 35,
            'arm_adj' => 35,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);

        Cropexpense::create([
            'loan_id' => 1,
            'crop_id' => 1,
            'loancrop_id' => 1,
            'cat_id' => 12,
            'expense' => 'Misc Acre',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);

        // SOYBEANS
        Cropexpense::create([
            'loan_id' => 1,
            'crop_id' => 2,
            'loancrop_id' => 2,
            'cat_id' => 1,
            'expense' => 'Fertilizer',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 24.25,
            'dist_adj' => 24.25,
            'other' => 0,
            'other_adj' => 0
        ]);

        Cropexpense::create([
            'loan_id' => 1,
            'crop_id' => 2,
            'loancrop_id' => 2,
            'cat_id' => 2,
            'expense' => 'Seed',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 60.50,
            'dist_adj' => 60.50,
            'other' => 0,
            'other_adj' => 0
        ]);

        Cropexpense::create([
            'loan_id' => 1,
            'crop_id' => 2,
            'loancrop_id' => 2,
            'cat_id' => 3,
            'expense' => 'Fungicide',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 16.56,
            'dist_adj' => 16.56,
            'other' => 0,
            'other_adj' => 0
        ]);

        Cropexpense::create([
            'loan_id' => 1,
            'crop_id' => 2,
            'loancrop_id' => 2,
            'cat_id' => 4,
            'expense' => 'Herbicide',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 36.17,
            'dist_adj' => 36.17,
            'other' => 0,
            'other_adj' => 0
        ]);

        Cropexpense::create([
            'loan_id' => 1,
            'crop_id' => 2,
            'loancrop_id' => 2,
            'cat_id' => 5,
            'expense' => 'Insecticide',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 23.28,
            'dist_adj' => 23.28,
            'other' => 0,
            'other_adj' => 0
        ]);

        Cropexpense::create([
            'loan_id' => 1,
            'crop_id' => 2,
            'loancrop_id' => 2,
            'cat_id' => 6,
            'expense' => 'Custom',
            'arm' => 26,
            'arm_adj' => 26,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);

        Cropexpense::create([
            'loan_id' => 1,
            'crop_id' => 2,
            'loancrop_id' => 2,
            'cat_id' => 7,
            'expense' => 'Fuel',
            'arm' => 30,
            'arm_adj' => 30,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);

        Cropexpense::create([
            'loan_id' => 1,
            'crop_id' => 2,
            'loancrop_id' => 2,
            'cat_id' => 8,
            'expense' => 'Labor',
            'arm' => 10,
            'arm_adj' => 10,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);

        Cropexpense::create([
            'loan_id' => 1,
            'crop_id' => 2,
            'loancrop_id' => 2,
            'cat_id' => 9,
            'expense' => 'Repairs',
            'arm' => 10,
            'arm_adj' => 10,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);

        Cropexpense::create([
            'loan_id' => 1,
            'crop_id' => 2,
            'loancrop_id' => 2,
            'cat_id' => 10,
            'expense' => 'Insurance',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);

        Cropexpense::create([
            'loan_id' => 1,
            'crop_id' => 2,
            'loancrop_id' => 2,
            'cat_id' => 11,
            'expense' => 'Harvesting',
            'arm' => 35,
            'arm_adj' => 35,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);

        Cropexpense::create([
            'loan_id' => 1,
            'crop_id' => 2,
            'loancrop_id' => 2,
            'cat_id' => 12,
            'expense' => 'Misc Acre',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);

        // COTTON
        Cropexpense::create([
            'loan_id' => 1,
            'crop_id' => 6,
            'loancrop_id' => 3,
            'cat_id' => 1,
            'expense' => 'Fertilizer',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 103.48,
            'dist_adj' => 103.48,
            'other' => 0,
            'other_adj' => 0
        ]);

        Cropexpense::create([
            'loan_id' => 1,
            'crop_id' => 6,
            'loancrop_id' => 3,
            'cat_id' => 2,
            'expense' => 'Seed',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 101.83,
            'dist_adj' => 101.83,
            'other' => 0,
            'other_adj' => 0
        ]);

        Cropexpense::create([
            'loan_id' => 1,
            'crop_id' => 6,
            'loancrop_id' => 3,
            'cat_id' => 3,
            'expense' => 'Fungicide',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);

        Cropexpense::create([
            'loan_id' => 1,
            'crop_id' => 6,
            'loancrop_id' => 3,
            'cat_id' => 4,
            'expense' => 'Herbicide',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 65.39,
            'dist_adj' => 65.39,
            'other' => 0,
            'other_adj' => 0
        ]);

        Cropexpense::create([
            'loan_id' => 1,
            'crop_id' => 6,
            'loancrop_id' => 3,
            'cat_id' => 5,
            'expense' => 'Insecticide',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 38.75,
            'dist_adj' => 38.75,
            'other' => 0,
            'other_adj' => 0
        ]);

        Cropexpense::create([
            'loan_id' => 1,
            'crop_id' => 6,
            'loancrop_id' => 3,
            'cat_id' => 6,
            'expense' => 'Custom',
            'arm' => 58,
            'arm_adj' => 58,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);

        Cropexpense::create([
            'loan_id' => 1,
            'crop_id' => 6,
            'loancrop_id' => 3,
            'cat_id' => 7,
            'expense' => 'Fuel',
            'arm' => 30,
            'arm_adj' => 30,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);

        Cropexpense::create([
            'loan_id' => 1,
            'crop_id' => 6,
            'loancrop_id' => 3,
            'cat_id' => 8,
            'expense' => 'Labor',
            'arm' => 24,
            'arm_adj' => 24,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);

        Cropexpense::create([
            'loan_id' => 1,
            'crop_id' => 6,
            'loancrop_id' => 3,
            'cat_id' => 9,
            'expense' => 'Repairs',
            'arm' => 20,
            'arm_adj' => 20,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);

        Cropexpense::create([
            'loan_id' => 1,
            'crop_id' => 6,
            'loancrop_id' => 3,
            'cat_id' => 10,
            'expense' => 'Insurance',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 20,
            'other_adj' => 20
        ]);

        Cropexpense::create([
            'loan_id' => 1,
            'crop_id' => 6,
            'loancrop_id' => 3,
            'cat_id' => 11,
            'expense' => 'Harvesting',
            'arm' => 90,
            'arm_adj' => 90,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);

        Cropexpense::create([
            'loan_id' => 1,
            'crop_id' => 6,
            'loancrop_id' => 3,
            'cat_id' => 12,
            'expense' => 'Misc Acre',
            'arm' => 6,
            'arm_adj' => 6,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);

        //LOAN #9
        Cropexpense::create([
            'loan_id' => 2,
            'crop_id' => 1,
            'loancrop_id' => 1,
            'cat_id' => 1,
            'expense' => 'Fertilizer',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 162.27,
            'dist_adj' => 162.27,
            'other' => 0,
            'other_adj' => 0
        ]);

        Cropexpense::create([
            'loan_id' => 2,
            'crop_id' => 1,
            'loancrop_id' => 1,
            'cat_id' => 2,
            'expense' => 'Seed',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 126,
            'dist_adj' => 126,
            'other' => 0,
            'other_adj' => 0
        ]);

        Cropexpense::create([
            'loan_id' => 2,
            'crop_id' => 1,
            'loancrop_id' => 1,
            'cat_id' => 3,
            'expense' => 'Fungicide',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);

        Cropexpense::create([
            'loan_id' => 2,
            'crop_id' => 1,
            'loancrop_id' => 1,
            'cat_id' => 4,
            'expense' => 'Herbicide',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 47.19,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);

        Cropexpense::create([
            'loan_id' => 2,
            'crop_id' => 1,
            'loancrop_id' => 1,
            'cat_id' => 5,
            'expense' => 'Insecticide',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 7.20,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);

        Cropexpense::create([
            'loan_id' => 2,
            'crop_id' => 1,
            'loancrop_id' => 1,
            'cat_id' => 6,
            'expense' => 'Custom',
            'arm' => 20.50,
            'arm_adj' => 20.50,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);

        Cropexpense::create([
            'loan_id' => 2,
            'crop_id' => 1,
            'loancrop_id' => 1,
            'cat_id' => 7,
            'expense' => 'Fuel',
            'arm' => 30,
            'arm_adj' => 30,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);

        Cropexpense::create([
            'loan_id' => 2,
            'crop_id' => 1,
            'loancrop_id' => 1,
            'cat_id' => 8,
            'expense' => 'Labor',
            'arm' => 10,
            'arm_adj' => 10,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);

        Cropexpense::create([
            'loan_id' => 2,
            'crop_id' => 1,
            'loancrop_id' => 1,
            'cat_id' => 9,
            'expense' => 'Repairs',
            'arm' => 10,
            'arm_adj' => 10,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);

        Cropexpense::create([
            'loan_id' => 2,
            'crop_id' => 1,
            'loancrop_id' => 1,
            'cat_id' => 10,
            'expense' => 'Insurance',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 20,
            'other_adj' => 20
        ]);

        Cropexpense::create([
            'loan_id' => 2,
            'crop_id' => 1,
            'loancrop_id' => 1,
            'cat_id' => 11,
            'expense' => 'Harvesting',
            'arm' => 35,
            'arm_adj' => 35,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);

        Cropexpense::create([
            'loan_id' => 2,
            'crop_id' => 1,
            'loancrop_id' => 1,
            'cat_id' => 12,
            'expense' => 'Misc_Acres',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);

        Cropexpense::create([
            'loan_id' => 2,
            'crop_id' => 2,
            'loancrop_id' => 2,
            'cat_id' => 1,
            'expense' => 'Fertilizer',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 24.25,
            'dist_adj' => 24.25,
            'other' => 0,
            'other_adj' => 0
        ]);

        Cropexpense::create([
            'loan_id' => 2,
            'crop_id' => 2,
            'loancrop_id' => 2,
            'cat_id' => 2,
            'expense' => 'Seed',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 60.50,
            'dist_adj' => 60.50,
            'other' => 0,
            'other_adj' => 0
        ]);

        Cropexpense::create([
            'loan_id' => 2,
            'crop_id' => 2,
            'loancrop_id' => 2,
            'cat_id' => 3,
            'expense' => 'Fungicide',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 16.56,
            'dist_adj' => 16.56,
            'other' => 0,
            'other_adj' => 0
        ]);

        Cropexpense::create([
            'loan_id' => 2,
            'crop_id' => 2,
            'loancrop_id' => 2,
            'cat_id' => 4,
            'expense' => 'Herbicide',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 36.17,
            'dist_adj' => 36.17,
            'other' => 0,
            'other_adj' => 0
        ]);

        Cropexpense::create([
            'loan_id' => 2,
            'crop_id' => 2,
            'loancrop_id' => 2,
            'cat_id' => 5,
            'expense' => 'Insecticide',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 23.28,
            'dist_adj' => 23.28,
            'other' => 0,
            'other_adj' => 0
        ]);

        Cropexpense::create([
            'loan_id' => 2,
            'crop_id' => 2,
            'loancrop_id' => 2,
            'cat_id' => 6,
            'expense' => 'Custom',
            'arm' => 26,
            'arm_adj' => 26,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);

        Cropexpense::create([
            'loan_id' => 2,
            'crop_id' => 2,
            'loancrop_id' => 2,
            'cat_id' => 7,
            'expense' => 'Fuel',
            'arm' => 30,
            'arm_adj' => 30,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);

        Cropexpense::create([
            'loan_id' => 2,
            'crop_id' => 2,
            'loancrop_id' => 2,
            'cat_id' => 8,
            'expense' => 'Labor',
            'arm' => 10,
            'arm_adj' => 10,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);

        Cropexpense::create([
            'loan_id' => 2,
            'crop_id' => 2,
            'loancrop_id' => 2,
            'cat_id' => 9,
            'expense' => 'Repairs',
            'arm' => 10,
            'arm_adj' => 10,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);

        Cropexpense::create([
            'loan_id' => 2,
            'crop_id' => 2,
            'loancrop_id' => 2,
            'cat_id' => 10,
            'expense' => 'Insurance',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 20,
            'other_adj' => 20
        ]);

        Cropexpense::create([
            'loan_id' => 2,
            'crop_id' => 2,
            'loancrop_id' => 2,
            'cat_id' => 11,
            'expense' => 'Harvesting',
            'arm' => 35,
            'arm_adj' => 35,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);

        Cropexpense::create([
            'loan_id' => 2,
            'crop_id' => 2,
            'loancrop_id' => 2,
            'cat_id' => 12,
            'expense' => 'Misc_Acres',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);
    }
}
