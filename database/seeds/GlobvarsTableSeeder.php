<?php

use App\Globvar;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GlobvarsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('globvars')->delete();

        $collection = [
            [
                'crop_year' => '2015',
                'season' => 'S'
            ]
        ];

        foreach ($collection as $record) {
            Globvar::create($record);
        }
    }
}
