<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder {
    public function run()
    {
        DB::table('users')->delete();

        $users = [
            [
                'name' => 'LENDA',
                'email' => 'lenda@arm-lenda.com',
                'app_id' => 1,
                'password' => Hash::make('secret')
            ],
            [
                'name' => 'ACCOUNTING',
                'email' => 'acct@arm-lenda.com',
                'app_id' => 1,
                'password' => Hash::make('secret')
            ],
            [
                'name' => 'Jonathan Gravois',
                'email' => 'jongravois@gmail.com',
                'app_id' => 1,
                'password' => Hash::make('password')
            ],
            [
                'name' => 'Kenn Thompson',
                'email' => 'kennthompson@gmail.com',
                'app_id' => 1,
                'password' => Hash::make('secret')
            ],
            [
                'name' => 'Brad Terral',
                'email' => 'bterral@armlend.com',
                'app_id' => 1,
                'password' => Hash::make('secret')
            ]
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}