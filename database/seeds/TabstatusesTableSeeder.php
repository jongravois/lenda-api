<?php

use App\Tabstatus;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TabstatusesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('tabstatuses')->delete();

        $collection = [
            [
                'loan_id' => 1,
                'summary' => true,
                'underwriting' => true,
                'terms' => true,
                'committee' => false,
                'comments' => true,
                'applicant' => true,
                'quests' => true,
                'references' => true,
                'financials' => true,
                'crops' => true,
                'farms' => true,
                'fsa' => true,
                'insurance' => true,
                'budget' => true,
                'collateral' => true,
                'prereqs' => true
            ],
            [
                'loan_id' => 2,
                'summary' => true,
                'underwriting' => true,
                'terms' => true,
                'committee' => true,
                'comments' => true,
                'applicant' => true,
                'quests' => true,
                'references' => true,
                'financials' => true,
                'crops' => true,
                'farms' => true,
                'fsa' => true,
                'insurance' => true,
                'budget' => true,
                'collateral' => true,
                'prereqs' => true
            ],
            [
                'loan_id' => 3,
                'summary' => true,
                'underwriting' => true,
                'terms' => true,
                'committee' => true,
                'comments' => true,
                'applicant' => true,
                'quests' => true,
                'references' => true,
                'financials' => true,
                'crops' => true,
                'farms' => true,
                'fsa' => true,
                'insurance' => true,
                'budget' => true,
                'collateral' => true,
                'prereqs' => true
            ],
            [
                'loan_id' => 4,
                'summary' => true,
                'underwriting' => true,
                'terms' => true,
                'committee' => true,
                'comments' => true,
                'applicant' => true,
                'quests' => true,
                'references' => true,
                'financials' => true,
                'crops' => true,
                'farms' => true,
                'fsa' => true,
                'insurance' => true,
                'budget' => true,
                'collateral' => true,
                'prereqs' => true
            ],
            [
                'loan_id' => 5,
                'summary' => true,
                'underwriting' => true,
                'terms' => true,
                'committee' => true,
                'comments' => true,
                'applicant' => true,
                'quests' => true,
                'references' => true,
                'financials' => true,
                'crops' => true,
                'farms' => true,
                'fsa' => true,
                'insurance' => true,
                'budget' => true,
                'collateral' => true,
                'prereqs' => true
            ],
            [
                'loan_id' => 6,
                'summary' => true,
                'underwriting' => true,
                'terms' => true,
                'committee' => true,
                'comments' => true,
                'applicant' => true,
                'quests' => true,
                'references' => true,
                'financials' => true,
                'crops' => true,
                'farms' => true,
                'fsa' => true,
                'insurance' => true,
                'budget' => true,
                'collateral' => true,
                'prereqs' => true
            ],
            [
                'loan_id' => 7,
                'summary' => true,
                'underwriting' => true,
                'terms' => true,
                'committee' => true,
                'comments' => true,
                'applicant' => true,
                'quests' => true,
                'references' => true,
                'financials' => true,
                'crops' => true,
                'farms' => true,
                'fsa' => true,
                'insurance' => true,
                'budget' => true,
                'collateral' => true,
                'prereqs' => true
            ],
            [
                'loan_id' => 8,
                'summary' => true,
                'underwriting' => true,
                'terms' => true,
                'committee' => true,
                'comments' => true,
                'applicant' => true,
                'quests' => true,
                'references' => true,
                'financials' => true,
                'crops' => true,
                'farms' => true,
                'fsa' => true,
                'insurance' => true,
                'budget' => true,
                'collateral' => true,
                'prereqs' => true
            ],
            [
                'loan_id' => 9,
                'summary' => true,
                'underwriting' => true,
                'terms' => true,
                'committee' => true,
                'comments' => true,
                'applicant' => true,
                'quests' => true,
                'references' => true,
                'financials' => true,
                'crops' => true,
                'farms' => true,
                'fsa' => true,
                'insurance' => true,
                'budget' => true,
                'collateral' => true,
                'prereqs' => true
            ]
        ];

        foreach ($collection as $record) {
            Tabstatus::create($record);
        }
    }
}
