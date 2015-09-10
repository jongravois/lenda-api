<?php

use App\Agency;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AgenciesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('agencies')->delete();

        $collection = [
            [
                'agency' => 'ARM',
                'address' => '2222 South Louisa St.',
                'city' => 'Rayville',
                'state_id' => 19,
                'zip' => 71269,
                'phone' => '3187285770',
                'email' => 'jmajure@armlend.com'
            ],
            [
                'agency' => 'Rayville State Farm',
                'address' => '1 Good Neighbor',
                'city' => 'Rayville',
                'state_id' => 19,
                'zip' => 71269,
                'phone' => '3189803201',
                'email' => 'rsf@agency.com'
            ],
            [
                'agency' => 'Tom Collins of Jonesboro Nationwide Insurance',
                'address' => '51 Cocktails Drive',
                'city' => 'Jonesboro',
                'state_id' => 4,
                'zip' => 38889,
                'phone' => '5015259210',
                'email' => 'tom@collins.com'
            ]
        ];

        foreach ($collection as $record) {
            Agency::create($record);
        }
    }
}
