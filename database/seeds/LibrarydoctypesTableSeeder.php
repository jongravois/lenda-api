<?php

use App\Librarydoctype;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LibrarydoctypesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('librarydoctypes')->delete();
        $collection = [
            [
                'doctype' => 'application'
            ],
            [
                'doctype' => 'fillable'
            ],
            [
                'doctype' => 'flyer'
            ],
            [
                'doctype' => 'brochure'
            ],
            [
                'doctype' => 'leaflet'
            ],
            [
                'doctype' => 'pamphlet'
            ],
            [
                'doctype' => 'newsletter'
            ]
        ];

        foreach ($collection as $record) {
            Librarydoctype::create($record);
        }
    }
}
