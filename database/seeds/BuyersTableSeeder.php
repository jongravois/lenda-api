<?php

use App\Buyer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BuyersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('buyers')->delete();

        $collection = [
            [
                'loan_id' => 1,
                'buyer' => 'Lansing Louisiana',
                'buyer_email' => 'lanla@lansing.com'
            ],
            [
                'loan_id' => 1,
                'buyer' => 'CropsRUs',
                'buyer_email' => 'nola@cropsrus.com'
            ],

            [
                'loan_id' => 2,
                'buyer' => 'Lansing Louisiana',
                'buyer_email' => 'lanla@lansing.com'
            ]
        ];

        foreach ($collection as $record) {
            Buyer::create($record);
        }
    }
}
