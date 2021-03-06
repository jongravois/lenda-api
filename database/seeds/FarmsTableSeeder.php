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
            'IR' => 1000,
            'NI' => 2350,
            'gov_pgm' => 'PLC'
        ]);

        Farm::create([
            'loan_id' => 1,
            'fsn' => '456',
            'county_id' => 1310,
            'owner' => 'Jim Smith',
            'perm_to_insure' => 0,
            'IR' => 0,
            'NI' => 50,
            'gov_pgm' => 'PLC'
        ]);

        Farm::create([
            'loan_id' => 1,
            'fsn' => '567',
            'county_id' => 1310,
            'owner' => 'Elroy Tate',
            'perm_to_insure' => 1,
            'IR' => 200,
            'NI' => 0,
            'gov_pgm' => 'PLC'
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
            'IR' => 400,
            'NI' => 0,
            'gov_pgm' => 'PLC'
        ]);

        ////NEW LOAN #2
        Farm::create([
            'loan_id' => 2,
            'fsn' => '321',
            'county_id' => 1317,
            'owner' => 'John Doe',
            'perm_to_insure' => 0,
            'share_rent' => 20,
            'IR' => 0,
            'NI' => 4347.4,
            'gov_pgm' => 'PLC'
        ]);
    }
}
