<?php

use App\Farm;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FarmsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('farms')->delete();

        ////NEW LOAN #1
        Farm::create([
            'loan_id' => 1,
            'fsn' => '123',
            'cash_rent' => 0,
            'waived' => 0,
            'when_due' => '',
            'fsa_paid' => 50000,
            'percent_irrigated' => 0
        ]);

        Farm::create([
            'loan_id' => 1,
            'fsn' => '456',
            'cash_rent' => 0,
            'waived' => 0,
            'when_due' => '',
            'fsa_paid' => 0,
            'percent_irrigated' => 0
        ]);

        Farm::create([
            'loan_id' => 1,
            'fsn' => '567',
            'cash_rent' => 0,
            'waived' => 0,
            'when_due' => '',
            'fsa_paid' => 0,
            'percent_irrigated' => 100
        ]);

        Farm::create([
            'loan_id' => 1,
            'fsn' => '789',
            'cash_rent' => 60000,
            'waived' => 40000,
            'when_due' => '33% 4/1/15',
            'fsa_paid' => 30000,
            'percent_irrigated' => 100
        ]);
    }
}
