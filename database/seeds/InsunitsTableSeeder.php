<?php

use App\Insunit;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsunitsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('insunits')->delete();

        $collection = [
            [
                'unit' => 'EU'
            ],
            [
                'unit' => 'BU'
            ],
            [
                'unit' => 'OU'
            ]
        ];

        foreach ($collection as $record) {
            Insunit::create($record);
        }
    }
}
