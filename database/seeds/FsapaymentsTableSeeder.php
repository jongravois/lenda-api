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
                'crop_id' => 1,
                'pgm' => 'PLC',
                'base_acres' => 1000,
                'fsa_yield' => 150,
                'amount' => 1250
            ],
            [
                'loan_id' => 1,
                'farm_id' => 2,
                'crop_id' => 2,
                'pgm' => 'PLC',
                'base_acres' => 1000,
                'fsa_yield' => 50,
                'amount' => 1250
            ],
            [
                'loan_id' => 1,
                'farm_id' => 1,
                'crop_id' => 6,
                'pgm' => 'PLC',
                'base_acres' => 1350,
                'fsa_yield' => 850,
                'amount' => 1250
            ],
            [
                'loan_id' => 1,
                'farm_id' => 2,
                'crop_id' => 6,
                'pgm' => 'PLC',
                'base_acres' => 50,
                'fsa_yield' => 900,
                'amount' => 100
            ],
            [
                'loan_id' => 1,
                'farm_id' => 3,
                'crop_id' => 6,
                'pgm' => 'PLC',
                'base_acres' => 200,
                'fsa_yield' => 900,
                'amount' => 400
            ],
            [
                'loan_id' => 1,
                'farm_id' => 4,
                'crop_id' => 6,
                'pgm' => 'PLC',
                'base_acres' => 400,
                'fsa_yield' => 1000,
                'amount' => 800
            ]
        ];

        foreach ($collection as $record) {
            Fsapayment::create($record);
        }
    }
}
