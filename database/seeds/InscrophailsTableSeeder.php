<?php

use App\Inscrophail;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InscrophailsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('inscrophails')->delete();

        $collection = [
            [
                'loan_id' => 1,
                'crop_id' => 1,
                'county_id' => 1317,
                'inspols_id' => 1,
                'amount' => 600,
                'premium' => 5,
                'ins_share' => 80
            ],
            [
                'loan_id' => 1,
                'crop_id' => 2,
                'county_id' => 1317,
                'inspols_id' => 2,
                'amount' => 0,
                'premium' => 0,
                'ins_share' => 80
            ]
        ];

        foreach ($collection as $record) {
            Inscrophail::create($record);
        }
    }
}
