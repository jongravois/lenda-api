<?php

use App\Rebator;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RebatorsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('rebators')->delete();

        $collection = [
            [
                'loan_id' => 1,
                'rebator' => 'Millers Gin',
                'rebator_email' => 'miller@gin.com'
            ],
            [
                'loan_id' => 2,
                'rebator' => 'Millers Gin',
                'rebator_email' => 'miller@gin.com'
            ]
        ];

        foreach ($collection as $record) {
            Rebator::create($record);
        }
    }
}
