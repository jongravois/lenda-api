<?php

use App\Crosscollateral;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CrosscollateralsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('crosscollaterals')->delete();

        Crosscollateral::create([
            'loan_id' => 1,
            'collateral_id' => 4
        ]);

        Crosscollateral::create([
            'loan_id' => 2,
            'collateral_id' => 4
        ]);

        Crosscollateral::create([
            'loan_id' => 1,
            'collateral_id' => 6
        ]);

        Crosscollateral::create([
            'loan_id' => 1,
            'collateral_id' => 8
        ]);

        Crosscollateral::create([
            'loan_id' => 2,
            'collateral_id' => 8
        ]);
    }
}
