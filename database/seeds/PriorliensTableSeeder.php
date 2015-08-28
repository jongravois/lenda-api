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
                'type' => 'crop',
                'lien_holder' => 'Mason Dixon Loans',
                'city_state' => 'Rayville, LA',
                'contact' => 'Rose Deveraux',
                'phone' => '3189100035',
                'email' => 'rose@goldengirls.com',
                'description' => "2013 loan to cover daughter's braces and son's heart and lungs transplant",
                'lien_amount' => 25000
            ],
            [
                'loan_id' => 1,
                'type' => 'crop',
                'lien_holder' => 'Jean Lafitte Loans',
                'city_state' => 'Monroe, LA',
                'contact' => 'Montgomery Scott',
                'phone' => '3188709080',
                'email' => 'mscott@lafitteloans.com',
                'description' => "2014 loan to cover wife's new car",
                'lien_amount' => 45000
            ]
        ];

        foreach ($collection as $record) {
            Priorlien::create($record);
        }
    }
}
