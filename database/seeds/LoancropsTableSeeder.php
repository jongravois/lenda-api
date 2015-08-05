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
                'var_harvest' => -0.0900,
                'rebates' => 0.1000
            ]
        ];

        foreach ($collection as $record) {
            Loancrop::create($record);
        }
    }
}
