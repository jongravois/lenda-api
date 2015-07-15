<?php

use App\Guarantor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GuarantorsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('guarantors')->delete();

        Guarantor::create([
            'loan_id' => 1,
            'guarantor' => 'Bo Gwin'
        ]);

        Guarantor::create([
            'loan_id' => 1,
            'guarantor' => 'Sharon Gwin'
        ]);
    }
}
