<?php

use App\Location;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('locations')->delete();

        $locations = [
            [
                'location' =>  'Corporate',
                'loc_abr' =>  'ARM',
                'address' =>  '2222 South Louisa Street',
                'city' =>  'Rayville',
                'state' =>  'LA',
                'zip' =>  '71269',
                'phone' =>  '3187285770',
                'manager_id' =>  5,
                'region_id' =>	1
            ],
            [
                'location' =>  'ARM MS',
                'loc_abr' =>  'CLE',
                'address' =>  '201 E. Sunflower Road, Suite 10',
                'city' =>  'Cleveland',
                'state' =>  'MS',
                'zip' =>  '38732',
                'phone' =>  '6628430944',
                'manager_id' =>  6,
                'region_id' =>	2
            ],
            [
                'location' =>  'ARM Crowley',
                'loc_abr'  =>  'CRO',
                'address' =>  '121 East Fifth Street',
                'city' =>  'Crowley',
                'state' =>  'LA',
                'zip' =>  '70526',
                'phone' =>  '3372504488',
                'manager_id' =>  6,
                'region_id' =>	3
            ],
            [
                'location' =>  'ARM Jonesboro',
                'loc_abr' =>  'JON',
                'address' =>  '2524 Alexander Drive, Suite D',
                'city'=>  'Jonesboro',
                'state' =>  'AR',
                'zip' =>  '72401',
                'phone' =>  '8703362620',
                'manager_id' =>  6,
                'region_id' =>	3
            ],
            [
                'location' =>  'ARM Rayville',
                'loc_abr' =>  'RAY',
                'address' =>  '2222 Louisa Street',
                'city' =>  'Rayville',
                'state' =>  'LA',
                'zip' =>  '71269',
                'phone' =>  '3187285770',
                'manager_id' =>  7,
                'region_id'=>	3
            ],
            [
                'location' =>  'ARM Dexter',
                'loc_abr' =>  'DEX',
                'address' =>  '325 W Business US 60',
                'city' =>  'Dexter',
                'state' =>  'MO',
                'zip'=>  '63841',
                'phone' =>  '5738914101',
                'manager_id' =>  6,
                'region_id' =>	3
            ],
            [
                'location' =>  'ARM Amarillo',
                'loc_abr' =>  'AMA',
                'address' =>  '7116 Interstate Hwy 40 Bldg C, Ste B',
                'city' =>  'Amarillo',
                'state' =>  'TX',
                'zip'=>  '79106',
                'phone' =>  '8065532918',
                'manager_id' =>  6,
                'region_id' =>	3
            ],
            [
                'location' =>  'ARM Victoria',
                'loc_abr' =>  'VIC',
                'address' =>  '108 E Forrest',
                'city' =>  'Victoria',
                'state' =>  'TX',
                'zip'=>  '77901',
                'phone' =>  '3612371717',
                'manager_id' =>  6,
                'region_id' =>	3
            ]
        ];

        foreach ($locations as $location) {
            Location::create($location);
        }
    }
}
