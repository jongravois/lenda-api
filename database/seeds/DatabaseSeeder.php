<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Model::unguard();

        $seeders = [
            'AgenciesTableSeeder',
            'AgentsTableSeeder',
            'CropsTableSeeder',
            'EntitytypesTableSeeder',
            'InsoptsTableSeeder',
            'InspolsTableSeeder',
            'InstypesTableSeeder',
            'InsunitsTableSeeder',
            'LoanstatusTableSeeder',
            'LoantypesTableSeeder',
            'LocationsTableSeeder',
            'MeasuresTableSeeder',
            'RegionsTableSeeder',
            'RolesTableSeeder',
            'SpendcatsTableSeeder',
            'StatesTableSeeder',
            'UsersTableSeeder'
        ];

        foreach($seeders as $seeder){
            $this->call($seeder);
        }

        Model::reguard();
    }
}
