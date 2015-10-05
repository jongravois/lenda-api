<?php

use App\Storagecontract;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StoragecontractsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('storagecontracts')->delete();

        Storagecontract::create([
            'loan_id' => 7,
            'contract_number' => '2431',
            'contract_date' => '2015-07-31',
            'delivery_date' => '2015-12-31',
            'grain_buyer' => 'Lansing Louisiana',
            'lien_holder' => 'Commercial Capital',
            'contract_amount' => 50000,
            'contract_price' => 7.0000,
            'owner_share' => 21.3,
            'revenue' => 275625,
            'eligible_proceeds' => 206719,
            'advance_percent' => 75
        ]);

        Storagecontract::create([
            'loan_id' => 7,
            'contract_number' => '2131',
            'contract_date' => '2015-06-01',
            'delivery_date' => '2015-12-31',
            'grain_buyer' => 'Lansing Louisiana',
            'lien_holder' => 'Commercial Capital',
            'contract_amount' => 50000,
            'contract_price' => 6.7500,
            'owner_share' => 21.3,
            'revenue' => 265781,
            'eligible_proceeds' => 199336,
            'advance_percent' => 75
        ]);

        Storagecontract::create([
            'loan_id' => 7,
            'contract_number' => '2697',
            'contract_date' => '2015-11-25',
            'delivery_date' => '2015-02-28',
            'grain_buyer' => 'Lansing Louisiana',
            'lien_holder' => 'Commercial Capital',
            'contract_amount' => 75000,
            'contract_price' => 7.1000,
            'owner_share' => 24.6,
            'revenue' => 401505,
            'eligible_proceeds' => 301129,
            'advance_percent' => 75
        ]);

        Storagecontract::create([
            'loan_id' => 7,
            'contract_number' => '2698',
            'contract_date' => '2015-11-25',
            'delivery_date' => '2016-01-31',
            'grain_buyer' => 'Lansing Louisiana',
            'lien_holder' => 'Commercial Capital',
            'contract_amount' => 17000,
            'contract_price' => 6.9000,
            'owner_share' => 21.3,
            'revenue' => 94322,
            'eligible_proceeds' => 70741,
            'advance_percent' => 75
        ]);
    }
}
