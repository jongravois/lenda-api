<?php

use App\Farmexpense;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FarmexpensesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('farmexpenses')->delete();

        Farmexpense::create([
            'crop_year'	=> 	2015,
            'loan_id'	=>	1,
            'expense'	=> 	'Equipment',
            'cost'		=>	23196
        ]);

        Farmexpense::create([
            'crop_year'	=> 	2015,
            'loan_id'	=>	1,
            'expense'	=> 	'Living Expenses',
            'cost'		=>	50000
        ]);
    }
}
