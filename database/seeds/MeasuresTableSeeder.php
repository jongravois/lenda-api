<?php

use App\Measure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MeasuresTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('measures')->delete();

        //60lbs -> bushel
        Measure::create([
            'unit' => 'bushel',
            'abr' => 'bu',
            'toPounds' => 60,
            'fromPounds' => .000018
        ]);

        //1lb -> pound
        Measure::create([
            'unit' => 'pound',
            'abr' => 'lb',
            'toPounds' => 1,
            'fromPounds' => 1
        ]);

        Measure::create([
            'unit' => 'hundredweight',
            'abr' => 'cwt',
            'toPounds' => 100,
            'fromPounds' => .01
        ]);

        Measure::create([
            'unit' => 'ton',
            'abr' => 'ton',
            'toPounds' => 2000,
            'fromPounds' => .005
        ]);

        Measure::create([
            'unit' => 'barrel',
            'abr' => 'bbl',
            'toPounds' => 162,
            'fromPounds' => .00357
        ]);

        //500 lbs -> bale
        Measure::create([
            'unit' => 'bale',
            'abr' => 'bl',
            'toPounds' => 500,
            'fromPounds' => .002
        ]);
    }
}
