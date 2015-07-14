<?php

use App\Viewoption;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ViewoptionsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('viewoptions')->delete();

        Viewoption::create([
            'user_id' => 1
        ]);

        Viewoption::create([
            'user_id' => 2
        ]);

        Viewoption::create([
            'user_id' => 3,
            'voCommitDistributor' => 1,
            'voCommitArm' =>  1,
            'voAcresTotal' => 1,
            'voBalanceDue' => 1
        ]);

        Viewoption::create([
            'user_id' => 4,
            'voCommitDistributor' => 1,
            'voCommitArm' =>  1,
            'voAcresTotal' => 1,
            'voBalanceDue' => 1
        ]);

        Viewoption::create([
            'user_id' => 5
        ]);

        Viewoption::create([
            'user_id' => 6
        ]);

        Viewoption::create([
            'user_id' => 7
        ]);
    }
}
