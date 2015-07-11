<?php

use App\Upload;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UploadsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('uploads')->delete();

        $collection = [
            [
                'loan_id' => 1,
                'user_id' => 3,
                'document' => 'Drivers License',
                'filename' => 'driversLicense',
                'path' => 'driversLicense',
                'filetype' => 'pdf',
                'original_filename' => 'driversLicense.pdf',
            ]
        ];

        foreach ($collection as $record) {
            Upload::create($record);
        }
    }
}
