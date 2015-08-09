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
            'county_id' => 1317,
            'owner' => 'John Doe',
            'perm_to_insure' => 0,
            'share_rent' => 20,
            'cash_rent' => 0,
            'waived' => 0,
            'when_due' => '',
            'fsa_paid' => 50000,
            'IR' => 1000,
            'NI' => 2350
        ]);

        Farm::create([
            'loan_id' => 1,
            'fsn' => '456',
            'county_id' => 1310,
            'owner' => 'Jim Smith',
            'cash_rent' => 0,
            'waived' => 0,
            'when_due' => '',
            'fsa_paid' => 0,
            'perm_to_insure' => 0,
            'IR' => 0,
            'NI' => 50
        ]);

        Farm::create([
            'loan_id' => 1,
            'fsn' => '567',
            'county_id' => 1310,
            'owner' => 'Elroy Tate',
            'perm_to_insure' => 1,
            'share_rent' => 0,
            'cash_rent' => 60000,
            'waived' => 400000,
            'when_due' => '33% 4/1/15',
            'fsa_paid' => 30000,
            'IR' => 200,
            'NI' => 0
        ]);

        Farm::create([
            'loan_id' => 1,
            'fsn' => '789',
            'county_id' => 1310,
            'owner' => 'Elroy Tate',
            'perm_to_insure' => 1,
            'share_rent' => 0,
            'cash_rent' => 60000,
            'waived' => 40000,
            'when_due' => '33% 4/1/15',
            'fsa_paid' => 30000,
            'IR' => 400,
            'NI' => 0
        ]);
    }
}
