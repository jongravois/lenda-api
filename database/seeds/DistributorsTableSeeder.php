<?php

use App\Distributor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistributorsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('distributors')->delete();

        Distributor::create([
            'distributor' => 'AGR',
            'name' => 'Agro Distribution',
            'address' => '427 Hwy 860',
            'city' => 'Delhi',
            'state_id' => '19',
            'zip' => 71232,
            'email' => 'n/a',
            'phone' => '3187223490'
        ]);

        Distributor::create([
            'distributor' => "JWG",
            'name' => "Jones Wines & Grains",
            'address' => '17 Plantin Row',
            'city' => 'Marksville',
            'state_id' => 19,
            'zip' => 71351,
            'email' => 'jwg@distributor.org',
            'phone' => '3182908839'
        ]);

        Distributor::create([
            'distributor' => 'CPS',
            'name' => 'Crop Production Services',
            'address' => '5 Main Street',
            'city' => 'Monroe',
            'state_id' => 19,
            'zip' => 71269,
            'email' => 'cps@distributor.com',
            'phone' => '7775551212'
        ]);

        Distributor::create([
            'distributor' => 'GPA',
            'name' => 'Greenpoint Agency',
            'address' => '99 Green Point Drive',
            'city' => 'New Orleans',
            'state_id' => 19,
            'zip' => 70123,
            'email' => 'gpa@distributor.com',
            'phone' => '8885551212'
        ]);

        Distributor::create([
            'distributor' => 'HEL',
            'name' => 'Helena',
            'address' => '1 Helena Road',
            'city' => 'Helana',
            'state_id' => 4,
            'zip' => 71269,
            'email' => 'hel@distributor.com',
            'phone' => '9995551212'
        ]);

        Distributor::create([
            'distributor' => 'JSI',
            'name' => 'Sanders Inc',
            'address' => '5 Ellis Lane',
            'city' => 'Rayville',
            'state_id' => 19,
            'zip' => 71269,
            'phone' => '3187283235',
            'email' => 'jsi@distributor.com'
        ]);
    }
}
