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
                'crop_id' => 1,
                'market' => 'CropsRUs'
            ],
            [
                'loan_id' => 1,
                'crop_id' => 2,
                'market' => 'CropsRUs'
            ],
            [
                'loan_id' => 1,
                'crop_id' => 6,
                'market' => 'CropsRUs',
                'gin_mill' => 'Millers Gin',
                'var_harvest' => 0.0900,
                'rebates' => 0.1000
            ],

            [
                'loan_id' => 2,
                'crop_id' => 1,
                'market' => 'Lansing Louisiana'
            ],
            [
                'loan_id' => 2,
                'crop_id' => 2,
                'market' => 'Lansing Louisiana'
            ],
            [
                'loan_id' => 2,
                'crop_id' => 6,
                'market' => 'Lansing Louisiana',
                'gin_mill' => 'Millers Gin',
                'var_harvest' => 0.0900,
                'rebates' => 1.2000
            ],
            [
                'loan_id' => 2,
                'crop_id' => 4,
                'market' => 'Lansing Louisiana'
            ],
            [
                'loan_id' => 2,
                'crop_id' => 7,
                'market' => 'Lansing Louisiana'
            ]
        ];

        foreach ($collection as $record) {
            Loancrop::create($record);
        }
    }
}
