<?php

use App\Fsapayment;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FsapaymentsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('fsapayments')->delete();

        $collection = [
            [
                'loan_id' => 1,
                'farm_id' => 1,
                'pgm' => 'PLC',
                'base_acres' => 3350,
                'fsa_yield' => 75,
                'amount' => 1250
            ],
            [
                'loan_id' => 1,
                'farm_id' => 2,
                'pgm' => 'PLC',
                'base_acres' => 50,
                'fsa_yield' => 175,
                'amount' => 100
            ],
            [
                'loan_id' => 1,
                'farm_id' => 3,
                'pgm' => 'PLC',
                'base_acres' => 200,
                'fsa_yield' => 180,
                'amount' => 400
            ],
            [
                'loan_id' => 1,
                'farm_id' => 4,
                'pgm' => 'PLC',
                'base_acres' => 400,
                'fsa_yield' => 190,
                'amount' => 800
            ]
        ];

        foreach ($collection as $record) {
            Fsapayment::create($record);
        }
    }
}
