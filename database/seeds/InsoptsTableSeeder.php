<?php

use App\Insopt;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsoptsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('insopts')->delete();

        $collection = [
            [
                'option' => 'PF'
            ],
            [
                'option' => 'PT'
            ],
            [
                'option' => 'SE'
            ],
            [
                'option' => 'HE'
            ],
            [
                'option' => 'SCO'
            ],
            [
                'option' => 'STAX'
            ]
        ];

        foreach ($collection as $record) {
            Insopt::create($record);
        }
    }
}
