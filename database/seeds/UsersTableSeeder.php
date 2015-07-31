<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder {
    public function run()
    {
        DB::table('users')->delete();

        $users = [
            //[1]LENDA
            [
                'name' => 'LENDA',
                'email' => 'lenda@arm-lenda.com',
                'app' => 'staff',
                'loc_id' => 1,
                'password' => Hash::make('secret'),
                'role_id' => 16
            ],
            //[2]ACCOUNTING
            [
                'name' => 'ACCOUNTING',
                'email' => 'acct@arm-lenda.com',
                'app' => 'staff',
                'loc_id' => 1,
                'password' => Hash::make('secret'),
                'role_id' => 16
            ],
            //[3]Gravois
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
            //[4]Thompson
            [
                'name' => 'Kenn Thompson',
                'loc_id' => 4,
                'nick' => 'KET',
                'email' => 'kennthompson@gmail.com',
                'app' => 'staff',
                'is_admin' => true,
                'is_manager' => true,
                'is_approver' => true,
                'manager_id' => 5,
                'closer_id' => 5,
                'password' => Hash::make('chessmaster'),
                'phone' => '9991235648',
                'manager_id' => 5,
                'closer_id' => 5,
                'role_id' => 14
            ],
            //[5]Terral
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
            //[6]Branch
            [
                'name' => 'Mark Branch',
                'loc_id' => 1,
                'nick' => 'MOB',
                'email' => 'mbranch@armlend.com',
                'app' => 'staff',
                'password' => Hash::make('secret'),
                'phone' => '3182824037',
                'manager_id' => 6,
                'closer_id' => 6,
                'role_id' => 2
            ],
            //[7]K Williams
            [
                'name' => 'Katie Williams',
                'loc_id' => 1,
                'nick' => 'KAW',
                'email' => 'kwilliams@armlend.com',
                'app' => 'staff',
                'password' => Hash::make('secret'),
                'phone' => '3182824037',
                'manager_id' => 6,
                'closer_id' => 6,
                'role_id' => 6
            ],
            //[8]Miller
            [
                'name' => 'Robbie Miller',
                'loc_id' => 1,
                'nick' => 'RAM',
                'email' => 'rmiller@armlend.com',
                'app' => 'staff',
                'password' => Hash::make('secret'),
                'phone' => '3182824037',
                'manager_id' => 6,
                'closer_id' => 6,
                'role_id' => 4
            ],
            //[9]Bassie
            [
                'name' => 'Butch Bassie',
                'loc_id' => 1,
                'nick' => 'BOB',
                'email' => 'bbassie@armlend.com',
                'app' => 'staff',
                'password' => Hash::make('secret'),
                'phone' => '3182824037',
                'manager_id' => 2,
                'closer_id' => 6,
                'role_id' => 4
            ],
            //[10]Dalton
            [
                'name' => 'Jack Dalton',
                'loc_id' => 4,
                'nick' => 'JAD',
                'email' => 'jdalton@armlend.com',
                'app' => 'staff',
                'password' => Hash::make('secret'),
                'phone' => '3182824037',
                'manager_id' => 6,
                'closer_id' => 6,
                'role_id' => 4
            ],
            //[11]Douget
            [
                'name' => 'Tony Douget',
                'loc_id' => 3,
                'nick' => 'TOD',
                'email' => 'tdouget@armlend.com',
                'app' => 'staff',
                'password' => Hash::make('secret'),
                'phone' => '3182824037',
                'manager_id' => 6,
                'closer_id' => 6,
                'role_id' => 4
            ],
            //[12]Nicklaus
            [
                'name' => 'Mark Nicklaus',
                'loc_id' => 8,
                'nick' => 'MEN',
                'email' => 'mnicklaus@armlend.com',
                'app' => 'staff',
                'password' => Hash::make('secret'),
                'phone' => '3182824037',
                'manager_id' => 6,
                'closer_id' => 6,
                'role_id' => 4
            ],
            //[13]Hille
            [
                'name' => 'Clint Hille',
                'loc_id' => 7,
                'nick' => 'CHL',
                'email' => 'chille@armlend.com',
                'app' => 'staff',
                'password' => Hash::make('secret'),
                'phone' => '3182824037',
                'manager_id' => 6,
                'closer_id' => 6,
                'role_id' => 4
            ],
            //[14]Majure
            [
                'name' => 'John Majure',
                'loc_id' => 1,
                'nick' => 'jwm',
                'email' => 'jmajure@armlend.com',
                'app' => 'staff',
                'password' => Hash::make('secret'),
                'phone' => '3182824037',
                'manager_id' => 6,
                'closer_id' => 6,
                'role_id' => 15
            ],
            //[15]M Williams
            [
                'name' => 'Mason Williams',
                'loc_id' => 1,
                'nick' => 'MAW',
                'email' => 'mwilliams@armlend.com',
                'app' => 'staff',
                'password' => Hash::make('secret'),
                'phone' => '3182824037',
                'manager_id' => 8,
                'closer_id' => 8,
                'role_id' => 9
            ],
            //[16]Tubbs
            [
                'name' => 'Marty Tubbs',
                'loc_id' => 2,
                'nick' => 'MAT',
                'email' => 'mtubbs@armlend.com',
                'app' => 'staff',
                'password' => Hash::make('secret'),
                'phone' => '3182824037',
                'manager_id' => 9,
                'closer_id' => 9,
                'role_id' => 9
            ],
            //[]Everdeen (Agent)
            [
                'name' => 'Katniss Everdeen',
                'loc_id' => 5,
                'email' => 'keverdeen@gmail.com',
                'app' => 'vendor',
                'password' => Hash::make('secret'),
                'phone' => '9995551212'
            ],
            //[]Stark (Farmer)
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