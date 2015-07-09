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
                'agency_id' => 1,
                'agent' => 'James Bond',
                'agent_phone' => '8003216789',
                'agent_email' => '007@hermajestyservice.org'
            ],
            [
                'agency_id' => 2,
                'agent' => 'Katniss Everdeen',
                'agent_phone' => '8001239876',
                'agent_email' => 'katniss@statefarm.org'
            ],
            [
                'agency_id' => 2,
                'agent' => 'Peeta Mallark',
                'agent_phone' => '8001239878',
                'agent_email' => 'peeta@statefarm.org'
            ],
            [
                'agency_id' => 2,
                'agent' => 'Bilbo Baggins',
                'agent_phone' => '7001239876',
                'agent_email' => 'bbaggins@nationwide.org'
            ],
            [
                'agency_id' => 2,
                'agent' => 'Frodo Baggins',
                'agent_phone' => '7001239878',
                'agent_email' => 'fbaggins@nationwide.org'
            ],
            [
                'agency_id' => 2,
                'agent' => 'Samwise Gangee',
                'agent_phone' => '7001239877',
                'agent_email' => 'sgangee@nationwide.org'
            ]
        ];

        foreach ($collection as $record) {
            Agent::create($record);
        }
    }
}
