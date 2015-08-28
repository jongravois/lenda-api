<?php

use App\Othercollateral;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OthercollateralsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('othercollaterals')->delete();

        Othercollateral::create([
            'loan_id' =>  1,
            'type' => 'crop',
            'source' =>  'Mason Dixon Loans',
            'description' =>  "2013 loan to cover daughter's braces and son's heart and lungs transplant",
            'amount' =>  12000,
            'mkt_value' => 8000,
            'prior_lien' => 8000,
            'discount' => 50
        ]);

        Othercollateral::create([
            'loan_id' =>  1,
            'type' => 'other',
            'source' =>  'Louisiana Institute of Technology',
            'description' =>  'This is an unsusual source of funding for a farmer but the money spends all the same.',
            'amount' =>  12500,
            'mkt_value' => 10000,
            'prior_lien' => 2500,
            'discount' => 90
        ]);

        Othercollateral::create([
            'loan_id' =>  1,
            'type' => 'other',
            'source' =>  'Louisiana State University',
            'description' =>  'Crop and fertilizer study allowance.',
            'amount' =>  7500,
            'mkt_value' => 5000,
            'prior_lien' => 2500,
            'discount' => 90
        ]);

        Othercollateral::create([
            'loan_id' =>  1,
            'type' => 'realestate',
            'source' =>  'Tony Stark',
            'description' =>  'home',
            'amount' =>  300000,
            'mkt_value' => 300000,
            'prior_lien' => 0,
            'discount' => 40
        ]);

        Othercollateral::create([
            'loan_id' =>  1,
            'type' => 'realestate',
            'source' =>  'Pepper Potts',
            'description' =>  'summer condominium',
            'amount' =>  200000,
            'mkt_value' => 10000,
            'prior_lien' => 100000,
            'discount' => 40
        ]);

        Othercollateral::create([
            'loan_id' =>  1,
            'type' => 'equipment',
            'source' =>  'Tony Stark',
            'description' =>  'Combine',
            'amount' =>  50000,
            'mkt_value' => 40000,
            'prior_lien' => 10000,
            'discount' => 20
        ]);

        Othercollateral::create([
            'loan_id' =>  1,
            'type' => 'equipment',
            'source' =>  'Tony Stark',
            'description' =>  'Tractor',
            'amount' =>  50000,
            'mkt_value' => 50000,
            'prior_lien' => 0,
            'discount' => 20
        ]);

        Othercollateral::create([
            'loan_id' =>  1,
            'type' => 'equipment',
            'source' =>  'Pepper Potts',
            'description' =>  'Cotton Gin',
            'amount' =>  200000,
            'mkt_value' => 150000,
            'prior_lien' => 5000,
            'discount' => 20
        ]);
    }
}
