<?php

use App\Loan;
use App\Loandisc;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoandiscsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('loandiscs')->delete();

        $loans = Loan::all();

        for($l=0; $l<count($loans); $l++) {
            Loandisc::create([
                'loan_id' => $loans[$l]->id
            ]);
        }
    }
}

