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
                'role_id' => 20
            ],
            //[2]ACCOUNTING
            [
                'name' => 'ACCOUNTING',
                'email' => 'acct@arm-lenda.com',
                'app' => 'staff',
                'loc_id' => 1,
                'password' => Hash::make('secret'),
                'role_id' => 20
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
                'role_id' => 18
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
                'full_sidebar' => false,
                'comms_sms' => true,
                'role_id' => 18
            ],
            //[5]Terral
            [
                'name' => 'Brad Terral',
                'loc_id' => 1,
                'nick' => 'BET',
                'email' => 'bterral@armlend.com',
                'app' => 'staff',
                'is_admin' => true,
                'is_manager' => true,
                'is_approver' => true,
                'password' => Hash::make('bterral'),
                'phone' => '3182824037',
                'manager_id' => 5,
                'closer_id' => 5,
                'full_sidebar' => true,
                'comms_sms' => true,
                'comms_outlook' => true,
                'role_id' => 2
            ],
            //[6]Branch
            [
                'name' => 'Mark Branch',
                'loc_id' => 1,
                'nick' => 'MOB',
                'email' => 'mbranch@armlend.com',
                'is_admin' => true,
                'is_manager' => true,
                'is_approver' => true,
                'app' => 'staff',
                'password' => Hash::make('mbranch'),
                'phone' => '3182824037',
                'manager_id' => 6,
                'closer_id' => 6,
                'role_id' => 1
            ],
            //[7]K Williams
            [
                'name' => 'Katie Williams',
                'loc_id' => 1,
                'nick' => 'KAW',
                'email' => 'kwilliams@armlend.com',
                'app' => 'staff',
                'password' => Hash::make('kwilliams'),
                'phone' => '3182824037',
                'manager_id' => 6,
                'closer_id' => 6,
                'role_id' => 6
            ],
            //[8]R Miller
            [
                'name' => 'Robbie Miller',
                'loc_id' => 5,
                'nick' => 'RAM',
                'email' => 'rmiller@armlend.com',
                'app' => 'staff',
                'password' => Hash::make('secret'),
                'phone' => '3187285770',
                'is_admin' => true,
                'is_manager' => true,
                'is_approver' => true,
                'manager_id' => 6,
                'closer_id' => 6,
                'role_id' => 9
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
                'loc_id' => 5,
                'nick' => 'MAW',
                'email' => 'mwilliams@armlend.com',
                'app' => 'staff',
                'password' => Hash::make('mwilliams'),
                'phone' => '3187285770',
                'manager_id' => 8,
                'closer_id' => 8,
                'role_id' => 12
            ],
            //[16]M Tubbs
            [
                'name' => 'Marty Tubbs',
                'loc_id' => 2,
                'nick' => 'MAT',
                'email' => 'mtubbs@armlend.com',
                'app' => 'staff',
                'password' => Hash::make('mtubbs'),
                'phone' => '6628430944',
                'manager_id' => 9,
                'closer_id' => 9,
                'role_id' => 10
            ],
            //[17]Everdeen (Agent)
            [
                'name' => 'Katniss Everdeen',
                'loc_id' => 5,
                'email' => 'keverdeen@gmail.com',
                'app' => 'vendor',
                'password' => Hash::make('secret'),
                'phone' => '9995551212'
            ],
            //[18]Stark (Farmer)
            [
                'name' => 'Tony Stark',
                'loc_id' => 5,
                'email' => 'tstark@gmail.com',
                'app' => 'client',
                'password' => Hash::make('secret'),
                'phone' => '9995559876'
            ],
            //[19]P Tate
            [
                'name' => 'Paul Tate',
                'nick' => 'PAT',
                'loc_id' => 1,
                'email' => 'PTate@agrilogic.com',
                'app' => 'staff',
                'password' => Hash::make('ptate'),
                'phone' => '3187285770',
                'is_admin' => true,
                'is_manager' => true,
                'is_approver' => true,
                'manager_id' => 19,
                'closer_id' => 19,
                'password' => Hash::make('ptate'),
                'phone' => '3182824037',
                'full_sidebar' => true,
                'comms_sms' => true,
                'role_id' => 3
            ],
            //[20]P Drew
            [
                'name' => 'Paul Drew',
                'nick' => 'PAD',
                'loc_id' => 1,
                'email' => 'paul.drew@iag.io',
                'app' => 'staff',
                'password' => Hash::make('pdrew'),
                'phone' => '3187285770',
                'app' => 'staff',
                'is_admin' => true,
                'is_manager' => true,
                'is_approver' => true,
                'manager_id' => 19,
                'closer_id' => 19,
                'full_sidebar' => true,
                'comms_sms' => true,
                'role_id' => 19
            ],
            //[21]D Cary
            [
                'name' => 'Dan Cary',
                'nick' => 'DOC',
                'loc_id' => 1,
                'email' => 'dan.cary@improvingenterprises.com',
                'app' => 'staff',
                'password' => Hash::make('dcary'),
                'phone' => '9795716088',
                'is_admin' => true,
                'is_manager' => true,
                'is_approver' => true,
                'manager_id' => 19,
                'closer_id' => 19,
                'full_sidebar' => true,
                'comms_sms' => true,
                'role_id' => 18
            ],
            //[22]A Marrical
            [
                'name' => 'Anthony Marrical',
                'nick' => 'ATM',
                'loc_id' => 1,
                'email' => 'Anthony.Marrical@improvingenterprises.com',
                'app' => 'staff',
                'password' => Hash::make('amarrical'),
                'phone' => '2482552269',
                'is_admin' => true,
                'is_manager' => true,
                'is_approver' => true,
                'manager_id' => 19,
                'closer_id' => 19,
                'full_sidebar' => true,
                'comms_sms' => true,
                'role_id' => 18
            ],
            //[23]M Mayer
            [
                'name' => 'Morgan Mayer',
                'nick' => 'MNM',
                'loc_id' => 1,
                'email' => 'mmayer@armlend.com',
                'app' => 'staff',
                'password' => Hash::make('mmayer'),
                'phone' => '8703362620',
                'is_admin' => true,
                'is_manager' => true,
                'is_approver' => true,
                'manager_id' => 10,
                'closer_id' => 10,
                'full_sidebar' => true,
                'comms_sms' => true,
                'role_id' => 7
            ]
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}