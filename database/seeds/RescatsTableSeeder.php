<?php

use App\Rescat;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RescatsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('rescats')->delete();

        $collection = [
            [
                'category' => 'Loan Processing'
            ],
            [
                'category' => 'Loan Operations'
            ],
            [
                'category' => 'Crop Insurance Operations'
            ],
            [
                'category' => 'Crop Insurance Management'
            ],
            [
                'category' => 'Month End Processing'
            ],
            [
                'category' => 'Business Management'
            ],
            [
                'category' => 'Loan Audit and Controls'
            ],
            [
                'category' => 'Employee Training'
            ],
            [
                'category' => 'Human Resources'
            ],
            [
                'category' => 'Misc. Business Processes'
            ]
        ];

        foreach ($collection as $record) {
            Rescat::create($record);
        }
    }
}
