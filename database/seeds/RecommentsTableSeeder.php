<?php

use App\Recomment;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecommentsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('recomments')->delete();

        $collection = [
            [
                'loan_id' => 1,
                'comment_id' => 1,
                'user_id' => 5,
                'body' => "Applicant admitted that he was unprepared for the funds last year and made some foolish purchases early in the loan. He has learned from his mistakes and is receptive to a controlled disbursement."
            ]
        ];

        foreach ($collection as $record) {
            Recomment::create($record);
        }
    }
}
