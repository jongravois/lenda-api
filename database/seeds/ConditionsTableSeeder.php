<?php

use App\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConditionsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('conditions')->delete();

        //ALL
        Condition::create([
            'loantype_id' => 1,
            'condition'	=> 'Agricultural Security Agreement on Crops and Equipment'
        ]);
        Condition::create([
            'loantype_id' => 1,
            'condition'	=>	'Assignment of Crop Insurance'
        ]);
        Condition::create([
            'loantype_id' => 1,
            'condition'	=>	'Assignment of Rebates'
        ]);
        Condition::create([
            'loantype_id' => 1,
            'condition'	=>	'Assignment of FSA Direct and LDP Payment'
        ]);
        Condition::create([
            'loantype_id' => 1,
            'condition'	=>	'Personal Guarantee'
        ]);

        //AGI
        Condition::create([
            'loantype_id' => 2,
            'condition'	=>	'Agricultural Security Agreement on Crops and Equipment'
        ]);
        Condition::create([
            'loantype_id' => 2,
            'condition'	=>	'Assignment of Crop Insurance'
        ]);
        Condition::create([
            'loantype_id' => 2,
            'condition'	=>	'Assignment of Rebates'
        ]);
        Condition::create([
            'loantype_id' => 2,
            'condition'	=>	'Assignment of FSA Direct and LDP Payment'
        ]);
        Condition::create([
            'loantype_id' => 2,
            'condition'	=>	'Approval by Distributor'
        ]);
        Condition::create([
            'loantype_id' => 2,
            'condition'	=>	'Personal Guarantee'
        ]);

        //AGP
        Condition::create([
            'loantype_id' => 3,
            'condition'	=>	'Agricultural Security Agreement on Crops and Equipment'
        ]);
        Condition::create([
            'loantype_id' => 3,
            'condition'	=>	'Assignment of Crop Insurance'
        ]);
        Condition::create([
            'loantype_id' => 3,
            'condition'	=>	'Assignment of Rebates'
        ]);
        Condition::create([
            'loantype_id' => 3,
            'condition'	=>	'Assignment of FSA Direct and LDP Payment'
        ]);
        Condition::create([
            'loantype_id' => 3,
            'condition'	=>	'Personal Guarantee'
        ]);

        //AGF
        Condition::create([
            'loantype_id' => 4,
            'condition'	=>	'Agricultural Security Agreement on Crops and Equipment'
        ]);
        Condition::create([
            'loantype_id' => 4,
            'condition'	=>	'Personal Guarantee'
        ]);

        //VST
        Condition::create([
            'loantype_id' => 5,
            'condition'	=>	'Approval by Distributor'
        ]);
        Condition::create([
            'loantype_id' => 5,
            'condition'	=>	'Personal Guarantee'
        ]);

        //CAP
        Condition::create([
            'loantype_id' => 6,
            'condition'	=>	'Agricultural Security Agreement on Crops and Equipment'
        ]);
        Condition::create([
            'loantype_id' => 6,
            'condition'	=>	'Personal Guarantee'
        ]);

        //STO
        Condition::create([
            'loantype_id' => 7,
            'condition' => 'Grain Storage Agreement'
        ]);

    }
}
