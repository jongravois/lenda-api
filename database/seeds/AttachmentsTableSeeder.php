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
            'title' => 'Drivers License',
            'filename' => 'driversLicense.pdf',
            'filetype' => 'pdf'
        ]);

        Attachment::create([
            'loan_id' => 1,
            'title' => 'Equipment List',
            'filename' => 'equipmentList.pdf',
            'filetype' => 'pdf'
        ]);

        Attachment::create([
            'loan_id' => 2,
            'title' => 'Drivers License',
            'filename' => 'driversLicense.pdf',
            'filetype' => 'pdf'
        ]);

        Attachment::create([
            'loan_id' => 2,
            'title' => 'Equipment List',
            'filename' => 'equipmentList.pdf',
            'filetype' => 'pdf'
        ]);
    }
}
