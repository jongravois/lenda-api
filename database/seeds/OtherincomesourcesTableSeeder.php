<?php

use App\Otherincomesource;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OtherincomesourcesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('otherincomesources')->delete();

        $collection = [
            [
                'source' => 'ppclaim',
                'description' => 'PP Claim'
            ],
            [
                'source' => 'other',
                'description' => 'Other'
            ]
        ];

        foreach ($collection as $record) {
            Otherincomesource::create($record);
        }
    }
}
