<?php

use App\Reportoption;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReportoptionsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('reportoptions')->delete();

        $users = User::all();

        foreach($users as $user){
            Reportoption::create([
                'user_id' => $user->id
            ]);
        }
    }
}
