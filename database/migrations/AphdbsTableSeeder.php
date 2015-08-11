<?php

use App\Aphdb;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AphdbsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('aphdbs')->delete();

        $collection = [
            [
                'inspol_id' =>3,
                'farm_id' => 1,
                'ins_share' => 80,
                'aph' => 850
            ]
        ];

        foreach ($collection as $record) {
            Aphdb::create($record);
        }
    }
}
