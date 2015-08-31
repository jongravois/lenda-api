<?php

use App\Reference;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReferencesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('references')->delete();

        $collection = [
            [
                'loan_id' => 1,
                'creditor' => 'Delhi Credit and Loan',
                'city_state' => 'Delhi, LA',
                'contact' => 'Joan London',
                'phone' => '3183455294',
                'email' => 'joan@london.com'
            ],
            [
                'loan_id' => 1,
                'creditor' => 'Rayville Credit and Loan',
                'city_state' => 'Rayville, LA',
                'contact' => 'Jack Frost',
                'phone' => '3189820304',
                'email' => 'jack@frost.com'
            ],
            [
                'loan_id' => 2,
                'creditor' => 'Rayville Credit and Loan',
                'city_state' => 'Rayville, LA',
                'contact' => 'Jack Frost',
                'phone' => '3189820304',
                'email' => 'jack@frost.com'
            ]
        ];

        foreach ($collection as $record) {
            Reference::create($record);
        }
    }
}
