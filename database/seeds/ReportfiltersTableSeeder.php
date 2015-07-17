<?php

use App\Reportfilter;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReportfiltersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('reportfilters')->delete();

        $users = User::all();

        foreach($users as $user){
            Reportfilter::create([
                'user_id' => $user->id
            ]);
        }
    }
}
