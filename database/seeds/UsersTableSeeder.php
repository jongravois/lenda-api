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
                'app' => 'staff',
                'loc_id' => 1,
                'password' => Hash::make('secret'),
                'role_id' => 16
            ],
            [
                'name' => 'ACCOUNTING',
                'email' => 'acct@arm-lenda.com',
                'app' => 'staff',
                'loc_id' => 1,
                'password' => Hash::make('secret'),
                'role_id' => 16
            ],
            [
                'name' => 'Jonathan Gravois',
                'loc_id' => 1,
                'nick' => 'JWG',
                'email' => 'jongravois@gmail.com',
                'outlook' => 'jgravois@rht.com',
                'app' => 'staff',
                'is_admin' => true,
                'is_manager' => true,
                'is_approver' => true,
                'manager_id' => 5,
                'closer_id' => 5,
                'password' => Hash::make('password'),
                'phone' => '9012870209',
                'full_sidebar' => false,
                'comms_sms' => true,
                'comms_outlook' => true,
                'role_id' => 14
            ],
            [
                'name' => 'Kenn Thompson',
                'loc_id' => 4,
                'nick' => 'KET',
                'email' => 'kennthompson@gmail.com',
                'app' => 'staff',
                'password' => Hash::make('secret'),
                'phone' => '9991235648',
                'manager_id' => 5,
                'closer_id' => 5,
                'role_id' => 14
            ],
            [
                'name' => 'Brad Terral',
                'loc_id' => 1,
                'nick' => 'BET',
                'email' => 'bterral@armlend.com',
                'app' => 'staff',
                'password' => Hash::make('secret'),
                'phone' => '3182824037',
                'manager_id' => 5,
                'closer_id' => 5,
                'role_id' => 1
            ],
            [
                'name' => 'Katniss Everdeen',
                'loc_id' => 5,
                'email' => 'keverdeen@gmail.com',
                'app' => 'vendor',
                'password' => Hash::make('secret'),
                'phone' => '9995551212'
            ],
            [
                'name' => 'Tony Stark',
                'loc_id' => 5,
                'email' => 'tstark@gmail.com',
                'app' => 'client',
                'password' => Hash::make('secret'),
                'phone' => '9995559876'
            ]
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}