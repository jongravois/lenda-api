<?php

use App\Loancropyield;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoancropyieldsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('loancropyields')->delete();

        $collection = [
            //corn
            [
                'loancrop_id' => 1,
                'p1' => 151.0,
                'p2' => 176.0,
                'p3' => 130.0,
                'p4' => 121.0,
                'p5' => 157.3,
                'p6' => 124.5
            ],
            //beans
            [
                'loancrop_id' => 2,
                'p1' => 31.0,
                'p2' => 36.0,
                'p3' => 43.0,
                'p4' => 21.0,
                'p5' => 26.0
            ],
            //cotton
            [
                'loancrop_id' => 3,
                'p1' => 841.0,
                'p2' => 846.0,
                'p3' => 843.0,
                'p4' => 841.0,
                'p5' => 846.0,
                'p6' => 848.8
            ],
            //corn
            [
                'loancrop_id' => 4,
                'p1' => 156.0,
                'p2' => 146.0,
                'p3' => 140.0,
                'p4' => 131.0,
                'p5' => 137.3,
                'p6' => 134.5
            ],
            //beans
            [
                'loancrop_id' => 5,
                'p1' => 51.0,
                'p2' => 46.0,
                'p3' => 43.0,
                'p4' => 41.0,
                'p5' => 46.0,
                'p6' => 45.0
            ],
            //cotton
            [
                'loancrop_id' => 6,
                'p1' => 851.0,
                'p2' => 856.0,
                'p3' => 853.0,
                'p4' => 851.0,
                'p5' => 856.0,
                'p6' => 858.1
            ],
            //sorghum
            [
                'loancrop_id' => 7,
                'p1' => 131.0,
                'p2' => 136.0,
                'p3' => 143.0,
                'p4' => 121.0,
                'p5' => 126.0,
                'p6' => 125.5
            ],
            //rice
            [
                'loancrop_id' => 8,
                'p1' => 681.0,
                'p2' => 686.0,
                'p3' => 683.0,
                'p4' => 681.0,
                'p5' => 686.0,
                'p6' => 685.5
            ]
        ];

        foreach ($collection as $record) {
            Loancropyield::create($record);
        }
    }
}
