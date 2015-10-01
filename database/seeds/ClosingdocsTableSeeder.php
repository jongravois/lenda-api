<?php

use App\Closingdoc;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClosingdocsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('closingdocs')->delete();

        $collection = [
            [
                'loan_id' => 1,
                'name' => 'Promissory Note',
                'path' => '',
                'status' => 'uploaded'
            ],
            [
                'loan_id' => 1,
                'name' => 'Agriculture Security Agreement',
                'path' => '',
                'status' => 'uploaded'
            ],
            [
                'loan_id' => 1,
                'name' => 'UCC Security Agreement',
                'path' => '',
                'status' => 'uploaded'
            ],
            [
                'loan_id' => 1,
                'name' => 'Assignment of Indemnity of Crop Insurance',
                'path' => '',
                'status' => 'pending'
            ],
            [
                'loan_id' => 1,
                'name' => 'Assignment of FSA Payment',
                'path' => '',
                'status' => 'pending'
            ],
            [
                'loan_id' => 1,
                'name' => 'Bo Gwin Guarantor Agreement',
                'path' => '',
                'status' => 'pending'
            ],
            [
                'loan_id' => 1,
                'name' => 'Sharon Gwin Guarantor Agreement',
                'path' => '',
                'status' => 'pending'
            ],
            [
                'loan_id' => 1,
                'name' => 'Cross Collateral Documents',
                'path' => '',
                'status' => 'pending'
            ],
            [
                'loan_id' => 1,
                'name' => 'ARM Fees Invoice',
                'path' => '',
                'status' => 'pending'
            ],
            [
                'loan_id' => 1,
                'name' => 'Distributor Documents',
                'path' => '',
                'status' => 'pending',
                'is_required' => false
            ]
        ];

        foreach ($collection as $record) {
            Closingdoc::create($record);
        }
    }
}
