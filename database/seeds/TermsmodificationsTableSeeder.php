<?php

use App\Termsmodification;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TermsmodificationsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('termsmodifications')->delete();

        $collection = [
            [
                'loan_id' => 1,
                'due_date' => '2015-12-15',
                'est_days' => 215,
                'int_percent_arm' => 11,
                'int_percent_dist' => 9,
                'fee_processing_arm' => 1,
                'fee_service_arm' => 1.5,
                'fee_processing_dist' => 0,
                'fee_service_dist' => 0,
                'fee_processing_borrower' => 0,
                'fee_service_borrower' => 0
            ]
        ];

        foreach ($collection as $record) {
            Termsmodification::create($record);
        }
    }
}
