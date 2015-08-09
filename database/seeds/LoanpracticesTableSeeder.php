<?php

use App\Loanpractice;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoanpracticesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('loanpractices')->delete();

        Loanpractice::create([
            'loan_id' => 1,
            'farm_id' => 1,
            'crop_id' => 1,
            'loancrop_id' => 1,
            'practice' => 'NI',
            'ins_type' => 'RP',
            'ins_option' => 'SE',
            'ins_unit' => 'EU',
            'ins_price' => 4.05,
            'ins_level' => 75,
            'ins_share' => 100,
            'aph' => 150,
            'ins_premium' => -20,
            'acres' => 1000,
            'prod_price' => 4.25,
            'prod_share' => 100,
            'prod_yield' => 161
        ]);

        Loanpractice::create([
            'loan_id' => 1,
            'farm_id' => 1,
            'crop_id' => 2,
            'loancrop_id' => 2,
            'practice' => 'NI',
            'ins_type' => 'RP',
            'ins_option' => 'SE',
            'ins_unit' => 'EU',
            'ins_price' => 9.62,
            'ins_level' => 80,
            'aph' => 50,
            'ins_premium' => -20,
            'acres' => 1000,
            'ins_share' => 80,
            'prod_price' => 9.25,
            'prod_share' => 80,
            'prod_yield' => 50
        ]);

        Loanpractice::create([
            'loan_id' => 1,
            'farm_id' => 1,
            'crop_id' => 6,
            'loancrop_id' => 3,
            'practice' => 'NI',
            'ins_type' => 'RP',
            'ins_option' => 'HPE SE',
            'ins_unit' => 'EU',
            'ins_price' => 0.6300,
            'ins_level' => 70,
            'aph' => 850,
            'ins_premium' => -19.82,
            'acres' => 350,
            'ins_share' => 80,
            'prod_price' => 0.60,
            'prod_share' => 80,
            'prod_yield' => 842
        ]);

        Loanpractice::create([
            'loan_id' => 1,
            'farm_id' => 1,
            'crop_id' => 6,
            'loancrop_id' => 3,
            'practice' => 'IR',
            'ins_type' => 'RP',
            'ins_option' => 'HPE SE',
            'ins_unit' => 'EU',
            'ins_price' => 0.6300,
            'ins_level' => 75,
            'aph' => 925,
            'ins_premium' => -19.82,
            'acres' => 1000,
            'ins_share' => 80,
            'prod_price' => 0.60,
            'prod_share' => 80,
            'prod_yield' => 912
        ]);

        Loanpractice::create([
            'loan_id' => 1,
            'farm_id' => 2,
            'crop_id' => 6,
            'loancrop_id' => 3,
            'practice' => 'NI',
            'ins_type' => 'RP',
            'ins_option' => 'SE',
            'ins_unit' => 'EU',
            'ins_price' => 0.63,
            'ins_level' => 75,
            'aph' => 900,
            'ins_premium' => -21.00,
            'acres' => 50,
            'ins_share' => 100,
            'prod_price' => 0.60,
            'prod_share' => 100,
            'prod_yield' => 889
        ]);

        Loanpractice::create([
            'loan_id' => 1,
            'farm_id' => 3,
            'crop_id' => 6,
            'loancrop_id' => 3,
            'practice' => 'IR',
            'ins_type' => 'RP',
            'ins_option' => 'SE',
            'ins_unit' => 'EU',
            'ins_price' => 0.6300,
            'ins_level' => 75,
            'aph' => 950,
            'ins_premium' => -21,
            'acres' => 200,
            'ins_share' => 100,
            'prod_price' => 0.60,
            'prod_share' => 100,
            'prod_yield' => 943
        ]);

        Loanpractice::create([
            'loan_id' => 1,
            'farm_id' => 4,
            'crop_id' => 6,
            'loancrop_id' => 3,
            'practice' => 'IR',
            'ins_type' => 'RP',
            'ins_option' => 'SE',
            'ins_unit' => 'EU',
            'ins_price' => 0.6300,
            'ins_level' => 75,
            'aph' => 1000,
            'ins_premium' => -20,
            'acres' => 400,
            'ins_share' => 100,
            'prod_price' => 0.60,
            'prod_share' => 100,
            'prod_yield' => 1004
        ]);
    }
}
