<?php

use App\Agent;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AgentsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('agents')->delete();

        $collection = [
            [
                'loan_id' => 1,
                'agency' => 'ARM',
                'agent' => 'James Bond',
                'city_state' => 'Rayville, LA',
                'phone' => '8003216789',
                'email' => '007@hermajestyservice.org'
            ],
            [
                'loan_id' => 2,
                'agency' => 'ARM',
                'agent' => 'James Bond',
                'city_state' => 'Rayville, LA',
                'phone' => '8003216789',
                'email' => '007@hermajestyservice.org'
            ],
            [
                'loan_id' => 2,
                'agency' => 'Farm State',
                'agent' => 'Jason Bourne',
                'city_state' => 'Monroe, LA',
                'phone' => '8005551212',
                'email' => 'jbourne@farmstate.org'
            ]
        ];

        foreach ($collection as $record) {
            Agent::create($record);
        }
    }
}
