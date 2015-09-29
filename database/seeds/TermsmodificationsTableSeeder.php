<?php

use App\Termsmodification;
use Carbon\Carbon;
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
                'mod_date' => Carbon::createFromFormat('m/d/Y','02/14/2015'),
                'due_date' => Carbon::createFromFormat('m/d/Y','12/15/2015'),
                'est_days' => 225,
                'int_percent_arm' => 9,
                'int_percent_dist' => 9,
                'fee_processing_arm' => 1,
                'fee_service_arm' => 1.5,
                'fee_processing_dist' => 0,
                'fee_service_dist' => 0,
                'fee_processing_borrower' => 0,
                'fee_service_borrower' => 0,
                'created_at' => Carbon::now()->subDays(45),
                'updated_at' => Carbon::now()->subDays(45),
            ],
            [
                'loan_id' => 2,
                'mod_date' => Carbon::createFromFormat('m/d/Y','02/14/2015'),
                'due_date' => Carbon::createFromFormat('m/d/Y','12/15/2015'),
                'est_days' => 225,
                'int_percent_arm' => 9,
                'int_percent_dist' => 9,
                'fee_processing_arm' => 1,
                'fee_service_arm' => 1.5,
                'fee_processing_dist' => 0,
                'fee_service_dist' => 0,
                'fee_processing_borrower' => 0,
                'fee_service_borrower' => 0
            ],
            [
                'loan_id' => 3,
                'mod_date' => Carbon::createFromFormat('m/d/Y','09/10/2015'),
                'due_date' => Carbon::createFromFormat('m/d/Y','03/15/2016'),
                'est_days' => 150,
                'int_percent_arm' => 9,
                'int_percent_dist' => 9,
                'fee_processing_arm' => 1,
                'fee_service_arm' => 1.5,
                'fee_processing_dist' => 0,
                'fee_service_dist' => 0,
                'fee_processing_borrower' => 0,
                'fee_service_borrower' => 0
            ],
            [
                'loan_id' => 4,
                'mod_date' => Carbon::createFromFormat('m/d/Y','02/14/2015'),
                'due_date' => Carbon::createFromFormat('m/d/Y','12/15/2015'),
                'est_days' => 225,
                'int_percent_arm' => 6,
                'int_percent_dist' => 0,
                'fee_processing_arm' => 0,
                'fee_service_arm' => 4,
                'fee_processing_dist' => 0,
                'fee_service_dist' => 0,
                'fee_processing_borrower' => 0,
                'fee_service_borrower' => 0
            ],
            [
                'loan_id' => 5,
                'mod_date' => Carbon::createFromFormat('m/d/Y','09/10/2015'),
                'due_date' => Carbon::createFromFormat('m/d/Y','03/15/2016'),
                'est_days' => 150,
                'int_percent_arm' => 9,
                'int_percent_dist' => 0,
                'fee_processing_arm' => 1,
                'fee_service_arm' => 1.5,
                'fee_processing_dist' => 0,
                'fee_service_dist' => 0,
                'fee_processing_borrower' => 0,
                'fee_service_borrower' => 0
            ],
            [
                'loan_id' => 6,
                'mod_date' => Carbon::createFromFormat('m/d/Y','02/14/2015'),
                'due_date' => Carbon::createFromFormat('m/d/Y','12/15/2015'),
                'est_days' => 225,
                'int_percent_arm' => 9,
                'int_percent_dist' => 0,
                'fee_processing_arm' => 1,
                'fee_service_arm' => 1.5,
                'fee_processing_dist' => 0,
                'fee_service_dist' => 0,
                'fee_processing_borrower' => 0,
                'fee_service_borrower' => 0
            ],
            [
                'loan_id' => 7,
                'mod_date' => Carbon::createFromFormat('m/d/Y','02/14/2015'),
                'due_date' => Carbon::createFromFormat('m/d/Y','12/15/2015'),
                'est_days' => 225,
                'int_percent_arm' => 9,
                'int_percent_dist' => 0,
                'fee_processing_arm' => 1,
                'fee_service_arm' => 1.5,
                'fee_processing_dist' => 0,
                'fee_service_dist' => 0,
                'fee_processing_borrower' => 0,
                'fee_service_borrower' => 0
            ],
            [
                'loan_id' => 8,
                'mod_date' => Carbon::createFromFormat('m/d/Y','08/14/2015'),
                'due_date' => Carbon::createFromFormat('m/d/Y','12/15/2015'),
                'est_days' => 150,
                'int_percent_arm' => 9,
                'int_percent_dist' => 9,
                'fee_processing_arm' => 1,
                'fee_service_arm' => 1.5,
                'fee_processing_dist' => 0,
                'fee_service_dist' => 0,
                'fee_processing_borrower' => 0,
                'fee_service_borrower' => 0
            ],
            [
                'loan_id' => 9,
                'mod_date' => Carbon::createFromFormat('m/d/Y','02/14/2014'),
                'due_date' => Carbon::createFromFormat('m/d/Y','12/15/2014'),
                'est_days' => 225,
                'int_percent_arm' => 12,
                'int_percent_dist' => 9,
                'fee_processing_arm' => 1,
                'fee_service_arm' => 1.5,
                'fee_processing_dist' => 0,
                'fee_service_dist' => 0,
                'fee_processing_borrower' => 0,
                'fee_service_borrower' => 0
            ],
            [
                'loan_id' => 1,
                'mod_date' => Carbon::createFromFormat('m/d/Y','08/11/2015'),
                'mod_type' => 'prog',
                'due_date' => Carbon::createFromFormat('m/d/Y','12/15/2015'),
                'fee_onTotal' => false,
                'est_days' => 225,
                'int_percent_arm' => 11,
                'int_percent_dist' => 9,
                'fee_processing_arm' => 2,
                'fee_service_arm' => 1.5,
                'fee_processing_dist' => 0,
                'fee_service_dist' => 0,
                'fee_processing_borrower' => 0,
                'fee_service_borrower' => 0,
                'created_at' => Carbon::now()->subDays(2),
                'updated_at' => Carbon::now()->subDays(2)
            ],
            [
                'loan_id' => 1,
                'mod_date' => Carbon::createFromFormat('m/d/Y','09/21/2015'),
                'mod_type' => 'add',
                'due_date' => Carbon::createFromFormat('m/d/Y','12/15/2015'),
                'fee_onTotal' => false,
                'est_days' => 225,
                'int_percent_arm' => 11,
                'int_percent_dist' => 9,
                'fee_processing_arm' => 2,
                'fee_service_arm' => 1.5,
                'fee_processing_dist' => 0,
                'fee_service_dist' => 0,
                'fee_processing_borrower' => 0,
                'fee_service_borrower' => 0,
                'created_at' => Carbon::now()->subDays(1),
                'updated_at' => Carbon::now()->subDays(1)
            ]
        ];

        foreach ($collection as $record) {
            Termsmodification::create($record);
        }
    }
}
