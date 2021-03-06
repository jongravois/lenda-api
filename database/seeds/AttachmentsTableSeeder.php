<?php

use App\Attachment;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttachmentsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('attachments')->delete();

        Attachment::create([
            'loan_id' => 1,
            'user_id' => 3,
            'status' => 'uploaded',
            'title' => "Driver's License",
            'filename' => 'driversLicense.pdf',
            'path' => '2015_1/driversLicense.pdf',
            'filetype' => 'pdf',
            'original_filename' => 'Stark Drivers License',
            'description' => '',
            'date_requested' => '2015-06-30',
            'date_received' => '2015-07-15'
        ]);
        Attachment::create([
            'loan_id' => 1,
            'title' => "CPA Financials",
            'filetype' => 'pdf',
            'date_requested' => '2015-06-30'
        ]);
        Attachment::create([
            'loan_id' => 1,
            'user_id' => 3,
            'status' => 'uploaded',
            'title' => "Equipment Inventory",
            'filename' => 'equipmentList.pdf',
            'path' => '2015_1/equipmentList.pdf',
            'filetype' => 'pdf',
            'original_filename' => 'Equipment Inventory',
            'date_requested' => '2015-06-30',
            'date_received' => '2015-07-04'
        ]);
        Attachment::create([
            'loan_id' => 1,
            'title' => "FSA Information",
            'filetype' => 'pdf',
            'date_requested' => '2015-06-30'
        ]);
        Attachment::create([
            'loan_id' => 1,
            'title' => "Crop Insurance APH Database",
            'filetype' => 'xlsx',
            'date_requested' => '2015-06-30'
        ]);
        Attachment::create([
            'loan_id' => 2,
            'user_id' => 3,
            'status' => 'uploaded',
            'title' => "Driver's License",
            'filename' => 'driversLicense.pdf',
            'path' => '2015_2/driversLicense.pdf',
            'filetype' => 'pdf',
            'original_filename' => 'Murdock Drivers License',
            'description' => '',
            'date_requested' => '2015-06-30',
            'date_received' => '2015-07-15'
        ]);
        Attachment::create([
            'loan_id' => 2,
            'title' => "CPA Financials",
            'filetype' => 'pdf',
            'date_requested' => '2015-06-30'
        ]);
        Attachment::create([
            'loan_id' => 2,
            'user_id' => 3,
            'status' => 'uploaded',
            'title' => "Equipment Inventory",
            'filename' => 'equipmentInventory.pdf',
            'path' => '2015_2/equipmentInventory.pdf',
            'filetype' => 'pdf',
            'original_filename' => 'Equipment Inventory',
            'date_requested' => '2015-06-30',
            'date_received' => '2015-07-04'
        ]);
    }
}
