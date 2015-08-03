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

        $users = DB::table('users')->count();
        for($c=5; $c<$users+1; $c++) {
            Viewoption::create([
                'user_id' => $c
            ]);
        }
    }
}
