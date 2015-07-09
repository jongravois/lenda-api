<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $seeders = [
            'AgenciesTableSeeder',
            'AgentsTableSeeder',
            'CountiesTableSeeder',
            'CropsTableSeeder',
            'InsoptsTableSeeder',
            'InspolsTableSeeder',
            'InstypesTableSeeder',
            'InsunitsTableSeeder',
            'LocationsTableSeeder',
            'RegionsTableSeeder',
            'UsersTableSeeder'
        ];

        foreach($seeders as $seeder){
            $this->call($seeder);
        }

        Model::reguard();
    }
}
