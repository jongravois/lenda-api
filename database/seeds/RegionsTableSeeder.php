<?php

use App\Region;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('regions')->delete();

        $regions = [
            [
                'region' => 'Corporate',
                'manager_id' => 5
            ],
            [
                'region' => 'East',
                'manager_id' => 6
            ],
            [
                'region' => 'West',
                'manager_id' => 7
            ],
            [
                'region' => 'Mid-West',
                'manager_id' => 4
            ]
        ];

        foreach ($regions as $region) {
            Region::create($region);
        }
    }
}
