<?php

use App\Library;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LibrariesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('libraries')->delete();

        $collection = [
            [
                'fileclass_id' => 3,
                'title' => 'ACH Authorization',
                'filename' => 'ACH Authorization.docx',
                'version' => 1,
                'description' => 'none given',
                'state_id' => null,
                'path' => 'legal/',
                'doctype_id' => 2,
                'filetype_id' => 1,
                'distributor_id' => null
            ]
        ];

        foreach ($collection as $record) {
            Library::create($record);
        }
    }
}
