<?php

use App\Qbtran;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QbtransTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('qbtrans')->delete();

        $collection = [
            [
                'transaction_id' => '1281',
                'loan_id' => 1,
                'user_id' => 3,
                'qb_date' => '2015-05-30',
                'qb_type' => 'LD',
                'cat_id' => 7,
                'qb_description' => 'Fuel',
                'qb_amount' => 50000,
                'qb_cat_balance' => 395000,
                'qb_total_budget' => 400000,
                'qb_total_spent' => 0,
                'qb_trans_status' => 'completed'
            ],
            [
                'transaction_id' => '1302',
                'loan_id' => 1,
                'user_id' => 3,
                'qb_date' => '2015-06-15',
                'qb_type' => 'LD',
                'cat_id' => 7,
                'qb_description' => 'Fuel',
                'qb_amount' => 150000,
                'qb_cat_balance' => 200000,
                'qb_total_budget' => 400000,
                'qb_total_spent' => 50000,
                'qb_trans_status' => 'completed'
            ],
            [
                'transaction_id' => '1281',
                'loan_id' => 1,
                'user_id' => 3,
                'qb_date' => '2015-06-30',
                'qb_type' => 'LD',
                'cat_id' => 8,
                'qb_description' => 'Labor',
                'qb_amount' => 120000,
                'qb_cat_balance' => 120000,
                'qb_total_budget' => 240000,
                'qb_total_spent' => 0,
                'qb_trans_status' => 'completed'
            ],
            [
                'transaction_id' => '1302',
                'loan_id' => 1,
                'user_id' => 3,
                'qb_date' => '2015-07-15',
                'qb_type' => 'LD',
                'cat_id' => 7,
                'qb_description' => 'Labor',
                'qb_amount' => 120000,
                'qb_cat_balance' => 0,
                'qb_total_budget' => 240000,
                'qb_total_spent' => 120000,
                'qb_trans_status' => 'completed'
            ]
        ];

        foreach ($collection as $record) {
            Qbtran::create($record);
        }
    }
}
