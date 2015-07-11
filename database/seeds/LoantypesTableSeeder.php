<?php

use App\Loantype;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoantypesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('loantypes')->delete();

        $collection = [
            [
                'loantype' => 'All-In',
                'abr' => 'ALL',
                'sort_order' => 2
            ],
            [
                'loantype' => 'Ag-Input',
                'abr' => 'AGI',
                'sort_order' => 1
            ],
            [
                'loantype' => 'Ag-Pro',
                'abr' => 'AGP',
                'sort_order' => 3
            ],
            [
                'loantype' => 'Ag-Pro Fasttrack',
                'abr' => 'AGF',
                'sort_order' => 4
            ],
            [
                'loantype' => 'Capital Bridge',
                'default_due_date' => '-3-15',
                'abr' => 'CAP',
                'sort_order' => 5
            ],
            [
                'loantype' => 'Ag-Vest',
                'default_due_date' => '-3-15',
                'abr' => 'VST',
                'sort_order' => 7
            ],
            [
                'loantype' => 'Grain Storage',
                'default_due_date' => '-3-15',
                'abr' => 'STO',
                'sort_order' => 6
            ]
        ];

        foreach ($collection as $record) {
            Loantype::create($record);
        }
    }
}
