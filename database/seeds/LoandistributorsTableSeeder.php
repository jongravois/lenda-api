<?php

use App\Loandistributor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoandistributorsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('loandistributors')->delete();

        Loandistributor::create([
            'loan_id' => 1,
            'distributor_id' => 6,
            'contact' => 'Marie Osmond',
            'phone' => '3189991212',
            'email' => 'marie@jsi.local'
        ]);

        Loandistributor::create([
            'loan_id' => 2,
            'distributor_id' => 6,
            'contact' => 'Donnie Trump',
            'phone' => '3189991232',
            'email' => 'donnie@jsi.local'
        ]);
    }
}
