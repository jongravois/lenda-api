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
            'title' => "Signed Application",
            'filetype' => 'pdf',
            'original_filename' => '',
            'date_requested' => '2015-06-30'
        ]);
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
            'title' => "Financials",
            'filetype' => 'pdf',
            'date_requested' => '2015-06-30'
        ]);
        Attachment::create([
            'loan_id' => 1,
            'user_id' => 3,
            'status' => 'uploaded',
            'title' => "Equipment List",
            'filename' => 'equipmentList.pdf',
            'path' => '2015_1/equipmentList.pdf',
            'filetype' => 'pdf',
            'original_filename' => 'Equipment List',
            'date_requested' => '2015-06-30',
            'date_received' => '2015-07-04'
        ]);
        Attachment::create([
            'loan_id' => 1,
            'title' => "Leases",
            'filetype' => 'pdf',
            'date_requested' => '2015-06-30'
        ]);
        Attachment::create([
            'loan_id' => 1,
            'title' => "FSA Information",
            'filetype' => 'pdf',
            'date_requested' => '2015-06-30'
        ]);
        Attachment::create([
            'loan_id' => 1,
            'title' => "Insurance Information",
            'filetype' => 'pdf',
            'date_requested' => '2015-06-30'
        ]);
        Attachment::create([
            'loan_id' => 1,
            'title' => "Crop Insurance APH Database",
            'filetype' => 'pdf',
            'date_requested' => '2015-06-30'
        ]);
        Attachment::create([
            'loan_id' => 1,
            'title' => "Grain Contracts",
            'filetype' => 'pdf',
            'date_requested' => '2015-06-30'
        ]);
    }
}
