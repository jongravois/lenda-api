<?php

use App\Farmunit;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FarmunitsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('farmunits')->delete();

        $collection = [
            [
                'farm_id' => 1,
                'county_id' => 1317,
                'owner' => 'John Doe',
                'share_rent' => 20,
                'perm_to_insure' => 0,
                'IR' => 0,
                'NI' => 2350
            ],
            [
                'farm_id' => 1,
                'county_id' => 1317,
                'owner' => 'John Doe',
                'share_rent' => 20,
                'perm_to_insure' => 0,
                'IR' => 1000,
                'NI' => 0
            ],
            [
                'farm_id' => 2,
                'county_id' => 1310,
                'owner' => 'Jim Smith',
                'share_rent' => 0,
                'perm_to_insure' => 0,
                'IR' => 0,
                'NI' => 50
            ],
            [
                'unit_type' => 'BU',
                'farm_id' => 3,
                'county_id' => 1310,
                'owner' => 'Elroy Tate',
                'share_rent' => 20,
                'perm_to_insure' => 1,
                'IR' => 200,
                'NI' => 0
            ],
            [
                'farm_id' => 4,
                'county_id' => 1310,
                'owner' => 'Elroy Tate',
                'share_rent' => 0,
                'perm_to_insure' => 0,
                'IR' => 400,
                'NI' => 0
            ]
        ];

        foreach ($collection as $record) {
            Farmunit::create($record);
        }
    }
}
