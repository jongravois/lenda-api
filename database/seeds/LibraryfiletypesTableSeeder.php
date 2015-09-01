<?php

use App\Libraryfiletype;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LibraryfiletypesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('libraryfiletypes')->delete();
        $collection = [
            [
                'filetype' => 'docx'
            ],
            [
                'filetype' => 'pdf'
            ],
            [
                'filetype' => 'pptx'
            ],
            [
                'filetype' => 'xlsx'
            ]
        ];

        foreach ($collection as $record) {
            Libraryfiletype::create($record);
        }
    }
}
