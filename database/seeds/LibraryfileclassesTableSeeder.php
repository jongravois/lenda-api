<?php

use App\Libraryfileclass;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LibraryfileclassesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('libraryfileclasses')->delete();
        $collection = [
            [
                'fileclass' => 'classroom'
            ],
            [
                'fileclass' => 'employee'
            ],
            [
                'fileclass' => 'legal'
            ],
            [
                'fileclass' => 'policies'
            ],
            [
                'fileclass' => 'procedures'
            ],
            [
                'fileclass' => 'products'
            ]
        ];

        foreach ($collection as $record) {
            Libraryfileclass::create($record);
        }
    }
}
