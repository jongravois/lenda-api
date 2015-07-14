<?php

use App\User;
use App\Viewfilter;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ViewfiltersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('viewfilters')->delete();

        $users = User::all();

        foreach($users as $user){
            Viewfilter::create([
                'user_id' => $user->id
            ]);
        }
    }
}
