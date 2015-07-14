<?php

use App\Priorlien;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PriorliensTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('priorliens')->delete();

        $collection = [
            [
                'loan_id' => 1,
                'lien_holder' => 'Mason Dixon Loans',
                'city_state' => 'Richland, LA',
                'contact' => 'Dixon Mason',
                'phone' => '3184659221',
                'email' => 'dixon@mason.org',
                'projected_crops' => 120000,
                'fsa_payments' => 1500
            ],
            [
                'loan_id' => 1,
                'lien_holder' => 'Mason Dixon Loans',
                'city_state' => 'Richland, LA',
                'contact' => 'Dixon Mason',
                'phone' => '3184659221',
                'email' => 'dixon@mason.org',
                'projected_crops' => 0,
                'fsa_payments' => 35000,
            ]
        ];

        foreach ($collection as $record) {
            Priorlien::create($record);
        }
    }
}
