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
                'loancrop_id' => 1,
                'buyer' => 'Lansing Louisiana',
                'buyer_email' => 'lanla@lansing.com'
            ],
            [
                'loan_id' => 1,
                'loancrop_id' => 2,
                'buyer' => 'Lansing Louisiana',
                'buyer_email' => 'lanla@lansing.com'
            ],
            [
                'loan_id' => 1,
                'loancrop_id' => 3,
                'buyer' => 'Lansing Louisiana',
                'buyer_email' => 'lanla@lansing.com'
            ],
            [
                'loan_id' => 1,
                'loancrop_id' => 3,
                'buyer' => 'CropsRUs',
                'buyer_email' => 'nola@cropsrus.com'
            ],

            [
                'loan_id' => 2,
                'loancrop_id' => 4,
                'buyer' => 'Lansing Louisiana',
                'buyer_email' => 'lanla@lansing.com'
            ],
            [
                'loan_id' => 2,
                'loancrop_id' => 5,
                'buyer' => 'Lansing Louisiana',
                'buyer_email' => 'lanla@lansing.com'
            ],
            [
                'loan_id' => 2,
                'loancrop_id' => 7,
                'buyer' => 'Lansing Louisiana',
                'buyer_email' => 'lanla@lansing.com'
            ],
            [
                'loan_id' => 2,
                'loancrop_id' => 6,
                'buyer' => 'CropsRUs',
                'buyer_email' => 'nola@cropsrus.com'
            ],
            [
                'loan_id' => 2,
                'loancrop_id' => 8,
                'buyer' => 'CropsRUs',
                'buyer_email' => 'nola@cropsrus.com'
            ]
        ];

        foreach ($collection as $record) {
            Buyer::create($record);
        }
    }
}
