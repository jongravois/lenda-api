<?php

use App\Optimizerviewoption;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OptimizerviewoptionsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('optimizerviewoptions')->delete();

        Optimizerviewoption::create([
            'user_id' => 1
        ]);

        Optimizerviewoption::create([
            'user_id' => 2,
//            'rent_per_acre_ARM' => 0,
//            'rent_per_acre_dist' => 0,
//            'rent_per_acre_other' => 0
        ]);

        Optimizerviewoption::create([
            'user_id' => 3
        ]);

        Optimizerviewoption::create([
            'user_id' => 4
        ]);

        $users = DB::table('users')->count();
        for($c=5; $c<$users; $c++) {
            Optimizerviewoption::create([
                'user_id' => $c
            ]);
        }

    }
}
