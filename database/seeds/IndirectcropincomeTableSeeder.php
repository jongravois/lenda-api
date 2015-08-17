<?php

use App\Indirectcropincome;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IndirectcropincomesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('indirectcropincomes')->delete();

        $collection = [
            [
                'loan_id' => 1,
                'ppclaim' => 1500,
                'other' => '20000'
            ],
            [
                'loan_id' => 2,
                'ppclaim' => 0,
                'other' => '40000'
            ],
            [
                'loan_id' => 2,
                'ppclaim' => 0,
                'other' => '30000'
            ]
        ];

        foreach ($collection as $record) {
            Indirectcropincome::create($record);
        }
    }
}
