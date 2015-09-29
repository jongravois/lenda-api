<?php

use App\Committeespec;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommitteespecsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('committeespecs')->delete();

        $collection = [
            [
                'loantype_id' => 1,
                'min_amount' => 500,
                'max_amount' => 50000,
                'min_debt_asset' => 20,
                'max_debt_asset' => 40,
                'min_loan_asset' => 10,
                'max_loan_asset' => 30,
                'applicant_grade' => 'A',
                'member_count' => 5
            ]
        ];

        foreach ($collection as $record) {
            Committeespec::create($record);
        }
    }
}
