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
            //NI Corn in Richland, LA
            [
                'loan_id' => 1,
                'inspol_id' =>1,
                'farm_id' => 1,
                'ins_share' => 80,
                'aph' => 200,
                'acres' => 1000
            ],
            //NI Beans in Richland, LA
            [
                'loan_id' => 1,
                'inspol_id' =>2,
                'farm_id' => 1,
                'ins_share' => 80,
                'aph' => 50,
                'acres' => 1000
            ],
            //NI Cotton in Richland, LA
            [
                'loan_id' => 1,
                'inspol_id' =>3,
                'farm_id' => 1,
                'ins_share' => 80,
                'aph' => 850,
                'acres' => 2350
            ],
            //IR Cotton in Richland, LA
            [
                'loan_id' => 1,
                'inspol_id' =>5,
                'farm_id' => 1,
                'ins_share' => 80,
                'aph' => 925,
                'acres' => 1000
            ],
            //NI Cotton in Morehouse, LA
            [
                'loan_id' => 1,
                'inspol_id' =>8,
                'farm_id' => 2,
                'ins_share' => 100,
                'aph' => 900,
                'acres' => 50
            ],
            //IR Cotton in Morehouse, LA
            [
                'loan_id' => 1,
                'inspol_id' =>11,
                'farm_id' => 3,
                'ins_share' => 80,
                'aph' => 950,
                'acres' => 200
            ],
            //IR Cotton in Morehouse, LA
            [
                'loan_id' => 1,
                'inspol_id' =>11,
                'farm_id' => 4,
                'ins_share' => 100,
                'aph' => 1000,
                'acres' => 400
            ],

            //NI Corn in Richland, LA
            [
                'loan_id' => 2,
                'inspol_id' =>13,
                'farm_id' => 5,
                'ins_share' => 80,
                'aph' => 152,
                'acres' => 347.4
            ],
            //NI Beans in Richland, LA
            [
                'loan_id' => 2,
                'inspol_id' =>14,
                'farm_id' => 5,
                'ins_share' => 80,
                'aph' => 50,
                'acres' => 1000
            ],
            //NI Cotton in Richland, LA
            [
                'loan_id' => 2,
                'inspol_id' =>12,
                'farm_id' => 5,
                'ins_share' => 80,
                'aph' => 850,
                'acres' => 1000
            ],
            //NI Sorghum in Richland, LA
            [
                'loan_id' => 2,
                'inspol_id' =>15,
                'farm_id' => 5,
                'ins_share' => 80,
                'aph' => 135,
                'acres' => 1000
            ],
            //NI Rice in Richland, LA
            [
                'loan_id' => 2,
                'inspol_id' =>16,
                'farm_id' => 5,
                'ins_share' => 80,
                'aph' => 700,
                'acres' => 1000
            ]
        ];

        foreach ($collection as $record) {
            Aphdb::create($record);
        }
    }
}
