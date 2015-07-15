<?php

use App\Defaultcountycrop;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DefaultcountycropsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('defaultcountycrops')->delete();

        for($c=1; $c<3240; $c++){
            Defaultcountycrop::create([
                'county_id' => $c
            ]);
        } // end for
    }
}
