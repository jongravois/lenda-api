<?php

use App\Defaultexpense;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DefaultexpensesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('defaultexpenses')->delete();

        //corn
        Defaultexpense::create([
            'location_id' => 1,
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
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 1,
            'loancrop_id' => 1,
            'cat_id' => 2,
            'expense' => 'Seed',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 126.00,
            'dist_adj' => 126.00,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
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
        Defaultexpense::create([
            'location_id' => 1,
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
        Defaultexpense::create([
            'location_id' => 1,
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
        Defaultexpense::create([
            'location_id' => 1,
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
        Defaultexpense::create([
            'location_id' => 1,
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
        Defaultexpense::create([
            'location_id' => 1,
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
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 1,
            'loancrop_id' => 1,
            'cat_id' => 9,
            'expense' => 'Repairs',
            'arm' => 10,
            'arm_adj' => 10,
            'dist' => 01,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
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
        Defaultexpense::create([
            'location_id' => 1,
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
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 1,
            'loancrop_id' => 1,
            'cat_id' => 12,
            'expense' => 'Misc_acre',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);

        //beans
        Defaultexpense::create([
            'location_id' => 1,
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
        Defaultexpense::create([
            'location_id' => 1,
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
        Defaultexpense::create([
            'location_id' => 1,
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
        Defaultexpense::create([
            'location_id' => 1,
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
        Defaultexpense::create([
            'location_id' => 1,
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
        Defaultexpense::create([
            'location_id' => 1,
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
        Defaultexpense::create([
            'location_id' => 1,
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
        Defaultexpense::create([
            'location_id' => 1,
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
        Defaultexpense::create([
            'location_id' => 1,
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
        Defaultexpense::create([
            'location_id' => 1,
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
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 2,
            'loancrop_id' => 2,
            'cat_id' => 11,
            'expense' => 'Harvesting',
            'arm' => 35.00,
            'arm_adj' => 35.00,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 2,
            'loancrop_id' => 2,
            'cat_id' => 12,
            'expense' => 'Misc_acre',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);

        //beansFAC
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 3,
            'loancrop_id' => 3,
            'cat_id' => 1,
            'expense' => 'Fertilizer',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 23.50,
            'dist_adj' => 23.50,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 3,
            'loancrop_id' => 3,
            'cat_id' => 2,
            'expense' => 'Seed',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 60.50,
            'dist_adj' => 60.50,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 3,
            'loancrop_id' => 3,
            'cat_id' => 3,
            'expense' => 'Fungicide',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 20,
            'dist_adj' => 20,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 3,
            'loancrop_id' => 3,
            'cat_id' => 4,
            'expense' => 'Herbicide',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 20,
            'dist_adj' => 20,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 3,
            'loancrop_id' => 3,
            'cat_id' => 5,
            'expense' => 'Insecticide',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 3,
            'loancrop_id' => 3,
            'cat_id' => 6,
            'expense' => 'Custom',
            'arm' => 25,
            'arm_adj' => 25,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 3,
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
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 3,
            'loancrop_id' => 3,
            'cat_id' => 8,
            'expense' => 'Labor',
            'arm' => 10,
            'arm_adj' => 10,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 3,
            'loancrop_id' => 3,
            'cat_id' => 9,
            'expense' => 'Repairs',
            'arm' => 10,
            'arm_adj' => 10,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 3,
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
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 3,
            'loancrop_id' => 3,
            'cat_id' => 11,
            'expense' => 'Harvesting',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 3,
            'loancrop_id' => 3,
            'cat_id' => 12,
            'expense' => 'Misc_acre',
            'arm' => 35,
            'arm_adj' => 35,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);

        //Sorghum
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 4,
            'loancrop_id' => 4,
            'cat_id' => 1,
            'expense' => 'Fertilizer',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 65,
            'dist_adj' => 65,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 4,
            'loancrop_id' => 4,
            'cat_id' => 2,
            'expense' => 'Seed',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 21.90,
            'dist_adj' => 21.90,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 4,
            'loancrop_id' => 4,
            'cat_id' => 3,
            'expense' => 'Fungicide',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 4,
            'loancrop_id' => 4,
            'cat_id' => 4,
            'expense' => 'Herbicide',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 15.78,
            'dist_adj' => 15.78,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 4,
            'loancrop_id' => 4,
            'cat_id' => 5,
            'expense' => 'Insecticide',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 15,
            'dist_adj' => 15,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 4,
            'loancrop_id' => 4,
            'cat_id' => 6,
            'expense' => 'Custom',
            'arm' => 27.50,
            'arm_adj' => 27.50,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 4,
            'loancrop_id' => 4,
            'cat_id' => 7,
            'expense' => 'Fuel',
            'arm' => 10,
            'arm_adj' => 10,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 4,
            'loancrop_id' => 4,
            'cat_id' => 8,
            'expense' => 'Labor',
            'arm' => 10,
            'arm_adj' => 10,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 4,
            'loancrop_id' => 4,
            'cat_id' => 9,
            'expense' => 'Repairs',
            'arm' => 8,
            'arm_adj' => 8,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 4,
            'loancrop_id' => 4,
            'cat_id' => 10,
            'expense' => 'Insurance',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 20,
            'other_adj' => 20
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 4,
            'loancrop_id' => 4,
            'cat_id' => 11,
            'expense' => 'Harvesting',
            'arm' => 35,
            'arm_adj' => 35,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 4,
            'loancrop_id' => 4,
            'cat_id' => 12,
            'expense' => 'Misc_acre',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);

        //Wheat
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 5,
            'loancrop_id' => 5,
            'cat_id' => 1,
            'expense' => 'Fertilizer',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 80,
            'dist_adj' => 80,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 5,
            'loancrop_id' => 5,
            'cat_id' => 2,
            'expense' => 'Seed',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 30,
            'dist_adj' => 30,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 5,
            'loancrop_id' => 5,
            'cat_id' => 3,
            'expense' => 'Fungicide',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 12,
            'dist_adj' => 12,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 5,
            'loancrop_id' => 5,
            'cat_id' => 4,
            'expense' => 'Herbicide',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 20,
            'dist_adj' => 20,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 5,
            'loancrop_id' => 5,
            'cat_id' => 5,
            'expense' => 'Insecticide',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 5,
            'loancrop_id' => 5,
            'cat_id' => 6,
            'expense' => 'Custom',
            'arm' => 8,
            'arm_adj' => 8,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 5,
            'loancrop_id' => 5,
            'cat_id' => 7,
            'expense' => 'Fuel',
            'arm' => 10,
            'arm_adj' => 10,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 5,
            'loancrop_id' => 5,
            'cat_id' => 8,
            'expense' => 'Labor',
            'arm' => 10,
            'arm_adj' => 10,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 5,
            'loancrop_id' => 5,
            'cat_id' => 9,
            'expense' => 'Repairs',
            'arm' => 5,
            'arm_adj' => 5,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 5,
            'loancrop_id' => 5,
            'cat_id' => 10,
            'expense' => 'Insurance',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 20,
            'other_adj' => 20
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 5,
            'loancrop_id' => 5,
            'cat_id' => 11,
            'expense' => 'Harvesting',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 5,
            'loancrop_id' => 5,
            'cat_id' => 12,
            'expense' => 'Misc_acre',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);

        //Cotton
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 6,
            'loancrop_id' => 6,
            'cat_id' => 1,
            'expense' => 'Fertilizer',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 103.48,
            'dist_adj' => 103.48,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 6,
            'loancrop_id' => 6,
            'cat_id' => 2,
            'expense' => 'Seed',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 101.83,
            'dist_adj' => 101.83,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 6,
            'loancrop_id' => 6,
            'cat_id' => 3,
            'expense' => 'Fungicide',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 6,
            'loancrop_id' => 6,
            'cat_id' => 4,
            'expense' => 'Herbicide',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 65.39,
            'dist_adj' => 65.39,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 6,
            'loancrop_id' => 6,
            'cat_id' => 5,
            'expense' => 'Insecticide',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 38.75,
            'dist_adj' => 38.75,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 6,
            'loancrop_id' => 6,
            'cat_id' => 6,
            'expense' => 'Custom',
            'arm' => 58,
            'arm_adj' => 58,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 6,
            'loancrop_id' => 6,
            'cat_id' => 7,
            'expense' => 'Fuel',
            'arm' => 30,
            'arm_adj' => 30,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 6,
            'loancrop_id' => 6,
            'cat_id' => 8,
            'expense' => 'Labor',
            'arm' => 24,
            'arm_adj' => 24,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 6,
            'loancrop_id' => 6,
            'cat_id' => 9,
            'expense' => 'Repairs',
            'arm' => 20,
            'arm_adj' => 20,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 6,
            'loancrop_id' => 6,
            'cat_id' => 10,
            'expense' => 'Insurance',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 20,
            'other_adj' => 20
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 6,
            'loancrop_id' => 6,
            'cat_id' => 11,
            'expense' => 'Harvesting',
            'arm' => 90,
            'arm_adj' => 90,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 6,
            'loancrop_id' => 6,
            'cat_id' => 12,
            'expense' => 'Misc_acre',
            'arm' => 6,
            'arm_adj' => 6,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);

        //Rice
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 7,
            'loancrop_id' => 7,
            'cat_id' => 1,
            'expense' => 'Fertilizer',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 99.88,
            'dist_adj' => 99.88,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 7,
            'loancrop_id' => 7,
            'cat_id' => 2,
            'expense' => 'Seed',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 75,
            'dist_adj' => 75,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 7,
            'loancrop_id' => 7,
            'cat_id' => 3,
            'expense' => 'Fungicide',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 27.14,
            'dist_adj' => 27.14,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 7,
            'loancrop_id' => 7,
            'cat_id' => 4,
            'expense' => 'Herbicide',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 80.71,
            'dist_adj' => 80.71,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 7,
            'loancrop_id' => 7,
            'cat_id' => 5,
            'expense' => 'Insecticide',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 7,
            'loancrop_id' => 7,
            'cat_id' => 6,
            'expense' => 'Custom',
            'arm' => 49.50,
            'arm_adj' => 49.50,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 7,
            'loancrop_id' => 7,
            'cat_id' => 7,
            'expense' => 'Fuel',
            'arm' => 70,
            'arm_adj' => 70,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 7,
            'loancrop_id' => 7,
            'cat_id' => 8,
            'expense' => 'Labor',
            'arm' => 27,
            'arm_adj' => 27,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 7,
            'loancrop_id' => 7,
            'cat_id' => 9,
            'expense' => 'Repairs',
            'arm' => 20,
            'arm_adj' => 20,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 7,
            'loancrop_id' => 7,
            'cat_id' => 10,
            'expense' => 'Insurance',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 20,
            'other_adj' => 20
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 7,
            'loancrop_id' => 7,
            'cat_id' => 11,
            'expense' => 'Harvesting',
            'arm' => 60,
            'arm_adj' => 60,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 7,
            'loancrop_id' => 7,
            'cat_id' => 12,
            'expense' => 'Misc_acre',
            'arm' => 90,
            'arm_adj' => 90,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);

        //Peanuts
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 8,
            'loancrop_id' => 8,
            'cat_id' => 1,
            'expense' => 'Fertilizer',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 48.25,
            'dist_adj' => 48.25,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 8,
            'loancrop_id' => 8,
            'cat_id' => 2,
            'expense' => 'Seed',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 74.49,
            'dist_adj' => 74.49,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 8,
            'loancrop_id' => 8,
            'cat_id' => 3,
            'expense' => 'Fungicide',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 17.90,
            'dist_adj' => 17.90,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 8,
            'loancrop_id' => 8,
            'cat_id' => 4,
            'expense' => 'Herbicide',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 24.84,
            'dist_adj' => 24.84,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 8,
            'loancrop_id' => 8,
            'cat_id' => 5,
            'expense' => 'Insecticide',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 8,
            'loancrop_id' => 8,
            'cat_id' => 6,
            'expense' => 'Custom',
            'arm' => 29.45,
            'arm_adj' => 29.45,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 8,
            'loancrop_id' => 8,
            'cat_id' => 7,
            'expense' => 'Fuel',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 8,
            'loancrop_id' => 8,
            'cat_id' => 8,
            'expense' => 'Labor',
            'arm' => 18,
            'arm_adj' => 18,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 8,
            'loancrop_id' => 8,
            'cat_id' => 9,
            'expense' => 'Repairs',
            'arm' => 10,
            'arm_adj' => 10,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 8,
            'loancrop_id' => 8,
            'cat_id' => 10,
            'expense' => 'Insurance',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 20,
            'other_adj' => 20
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 8,
            'loancrop_id' => 8,
            'cat_id' => 11,
            'expense' => 'Harvesting',
            'arm' => 35,
            'arm_adj' => 35,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 8,
            'loancrop_id' => 8,
            'cat_id' => 12,
            'expense' => 'Misc_acre',
            'arm' => 6,
            'arm_adj' => 6,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);

        //Sugar Cane
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 9,
            'loancrop_id' => 9,
            'cat_id' => 1,
            'expense' => 'Fertilizer',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 245.89,
            'dist_adj' => 245.89,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 9,
            'loancrop_id' => 9,
            'cat_id' => 2,
            'expense' => 'Seed',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 9,
            'loancrop_id' => 9,
            'cat_id' => 3,
            'expense' => 'Fungicide',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 15,
            'dist_adj' => 15,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 9,
            'loancrop_id' => 9,
            'cat_id' => 4,
            'expense' => 'Herbicide',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 75.85,
            'dist_adj' => 75.85,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 9,
            'loancrop_id' => 9,
            'cat_id' => 5,
            'expense' => 'Insecticide',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 9,
            'loancrop_id' => 9,
            'cat_id' => 6,
            'expense' => 'Custom',
            'arm' => 18,
            'arm_adj' => 18,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 9,
            'loancrop_id' => 9,
            'cat_id' => 7,
            'expense' => 'Fuel',
            'arm' => 15,
            'arm_adj' => 15,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 9,
            'loancrop_id' => 9,
            'cat_id' => 8,
            'expense' => 'Labor',
            'arm' => 15,
            'arm_adj' => 15,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 9,
            'loancrop_id' => 9,
            'cat_id' => 9,
            'expense' => 'Repairs',
            'arm' => 15,
            'arm_adj' => 15,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 9,
            'loancrop_id' => 9,
            'cat_id' => 10,
            'expense' => 'Insurance',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 20,
            'other_adj' => 20
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 9,
            'loancrop_id' => 9,
            'cat_id' => 11,
            'expense' => 'Harvesting',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 9,
            'loancrop_id' => 9,
            'cat_id' => 12,
            'expense' => 'Misc_acre',
            'arm' => 100,
            'arm_adj' => 100,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);

        //SUNFLOWERS
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 10,
            'loancrop_id' => 10,
            'cat_id' => 1,
            'expense' => 'Fertilizer',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 30,
            'dist_adj' => 30,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 10,
            'loancrop_id' => 10,
            'cat_id' => 2,
            'expense' => 'Seed',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 15,
            'dist_adj' => 15,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 10,
            'loancrop_id' => 10,
            'cat_id' => 3,
            'expense' => 'Fungicide',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 10,
            'dist_adj' => 10,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 10,
            'loancrop_id' => 10,
            'cat_id' => 4,
            'expense' => 'Herbicide',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 10,
            'loancrop_id' => 10,
            'cat_id' => 5,
            'expense' => 'Insecticide',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 10,
            'loancrop_id' => 10,
            'cat_id' => 6,
            'expense' => 'Custom',
            'arm' => 4.50,
            'arm_adj' => 4.50,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 10,
            'loancrop_id' => 10,
            'cat_id' => 7,
            'expense' => 'Fuel',
            'arm' => 15,
            'arm_adj' => 15,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 10,
            'loancrop_id' => 10,
            'cat_id' => 8,
            'expense' => 'Labor',
            'arm' => 21,
            'arm_adj' => 21,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 10,
            'loancrop_id' => 10,
            'cat_id' => 9,
            'expense' => 'Repairs',
            'arm' => 4,
            'arm_adj' => 4,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 10,
            'loancrop_id' => 10,
            'cat_id' => 10,
            'expense' => 'Insurance',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 20,
            'other_adj' => 20
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 10,
            'loancrop_id' => 10,
            'cat_id' => 11,
            'expense' => 'Harvesting',
            'arm' => 0,
            'arm_adj' => 0,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);
        Defaultexpense::create([
            'location_id' => 1,
            'crop_id' => 10,
            'loancrop_id' => 10,
            'cat_id' => 12,
            'expense' => 'Misc_acre',
            'arm' => 5,
            'arm_adj' => 5,
            'dist' => 0,
            'dist_adj' => 0,
            'other' => 0,
            'other_adj' => 0
        ]);
    }
}
