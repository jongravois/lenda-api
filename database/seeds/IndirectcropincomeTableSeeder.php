<?php

use App\Indirectcropincome;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IndirectcropincomesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('indirectcropincomes')->delete();

        $collection = [
            [
                'loan_id' => 1,
                'source' => 'ppclaim',
                'description' => 'Prevented Planting Claim for Soybeans FAC',
                'amount' => 8500,
                'disc_percent' => 100,
                'collateral' => 0,
            ],
            [
                'loan_id' => 1,
                'source' => 'other',
                'description' => 'Personal sale of farm equipment',
                'amount' => 11500,
                'disc_percent' => 100,
                'collateral' => 0,
            ],
            [
                'loan_id' => 2,
                'source' => 'other',
                'description' => 'Lorem ipsum est con vivique',
                'amount' => 40000,
                'disc_percent' => 100,
                'collateral' => 0,
            ],
            [
                'loan_id' => 3,
                'source' => 'other',
                'description' => 'Cogito ergo sum',
                'amount' => 30000,
                'disc_percent' => 100,
                'collateral' => 0,
            ]
        ];

        foreach ($collection as $record) {
            Indirectcropincome::create($record);
        }
    }
}
