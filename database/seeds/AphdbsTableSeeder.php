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
                //NI Corn in Richland, LA
                'loan_id' => 1,
                'inspol_id' =>1,
                'farm_id' => 1,
                'ins_share' => 80,
                'aph' => 200
            ],
            [
                //NI Beans in Richland, LA
                'loan_id' => 1,
                'inspol_id' =>2,
                'farm_id' => 1,
                'ins_share' => 80,
                'aph' => 50
            ],
            [
                //NI Cotton in Richland, LA
                'loan_id' => 1,
                'inspol_id' =>3,
                'farm_id' => 1,
                'ins_share' => 80,
                'aph' => 850
            ],
            [
                //IR Cotton in Richland, LA
                'loan_id' => 1,
                'inspol_id' =>5,
                'farm_id' => 1,
                'ins_share' => 80,
                'aph' => 925
            ],
            [
                //NI Cotton in Morehouse, LA
                'loan_id' => 1,
                'inspol_id' =>8,
                'farm_id' => 2,
                'ins_share' => 100,
                'aph' => 900
            ],
            [
                //IR Cotton in Morehouse, LA
                'loan_id' => 1,
                'inspol_id' =>11,
                'farm_id' => 3,
                'ins_share' => 80,
                'aph' => 950
            ],
            [
                //IR Cotton in Morehouse, LA
                'loan_id' => 1,
                'inspol_id' =>11,
                'farm_id' => 4,
                'ins_share' => 100,
                'aph' => 1000
            ]
        ];

        foreach ($collection as $record) {
            Aphdb::create($record);
        }
    }
}
