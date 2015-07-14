<?php

use App\Reference;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReferencesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('references')->delete();

        $collection = [
            [
                'loan_id' => 1,
                'creditor' => 'Galaxy Credit',
                'city_state' => 'Delhi, LA',
                'contact' => 'Joan London',
                'phone' => '3183455294',
                'email' => 'joan@london.com'
            ]
        ];

        foreach ($collection as $record) {
            Reference::create($record);
        }
    }
}
