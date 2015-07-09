<?php

use App\Instype;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InstypesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('instypes')->delete();

        $collection = [
            [
                'type' => 'RP'
            ],
            [
                'type' => 'YP'
            ],
            [
                'type' => 'CAT'
            ]
        ];

        foreach ($collection as $record) {
            Instype::create($record);
        }
    }
}
