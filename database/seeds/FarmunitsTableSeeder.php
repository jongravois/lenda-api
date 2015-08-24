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
                'loan_id' => 1,
                'farm_id' => 1,
                'practice' => 'IR',
                'acres' => 1000
            ],
            [
                'loan_id' => 1,
                'farm_id' => 1,
                'practice' => 'NI',
                'acres' => 2350
            ],
            [
                'loan_id' => 1,
                'farm_id' => 2,
                'practice' => 'NI',
                'acres' => 50
            ],
            [
                'loan_id' => 1,
                'farm_id' => 3,
                'practice' => 'IR',
                'acres' => 200
            ],
            [
                'loan_id' => 1,
                'farm_id' => 4,
                'practice' => 'IR',
                'acres' => 400
            ]
        ];

        foreach ($collection as $record) {
            Farmunit::create($record);
        }
    }
}
