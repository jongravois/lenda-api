<?php

use App\Loancrop;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoancropsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('loancrops')->delete();

        $collection = [
            [
                'loan_id' => 1,
                'crop_id' => 1
            ],
            [
                'loan_id' => 1,
                'crop_id' => 2
            ],
            [
                'loan_id' => 1,
                'crop_id' => 6,
                'var_harvest' => 0.0900,
                'rebates' => 5
            ],

            [
                'loan_id' => 2,
                'crop_id' => 1
            ],
            [
                'loan_id' => 2,
                'crop_id' => 2
            ],
            [
                'loan_id' => 2,
                'crop_id' => 6,
                'var_harvest' => 0.0900,
                'rebates' => 5
            ],
            [
                'loan_id' => 2,
                'crop_id' => 4
            ],
            [
                'loan_id' => 2,
                'crop_id' => 7
            ]
        ];

        foreach ($collection as $record) {
            Loancrop::create($record);
        }
    }
}
