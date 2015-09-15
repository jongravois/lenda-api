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
                'sort_order' => 2,
                'default_int_rate' => 12,
                'default_origination_fee_rate' => 1,
                'default_service_fee_rate' => 1.5
            ],
            [
                'loantype' => 'Ag-Input',
                'abr' => 'AGI',
                'sort_order' => 1,
                'default_int_rate' => 12,
                'default_origination_fee_rate' => 1,
                'default_service_fee_rate' => 1.5
            ],
            [
                'loantype' => 'Ag-Pro',
                'abr' => 'AGP',
                'sort_order' => 3,
                'default_int_rate' => 12,
                'default_origination_fee_rate' => 1,
                'default_service_fee_rate' => 1.5
            ],
            [
                'loantype' => 'Ag-Pro Fasttrack',
                'abr' => 'AGF',
                'sort_order' => 4,
                'default_int_rate' => 12,
                'default_origination_fee_rate' => 1,
                'default_service_fee_rate' => 1.5
            ],
            [
                'loantype' => 'Capital Bridge',
                'default_due_date' => '-3-15',
                'abr' => 'CAP',
                'sort_order' => 5,
                'default_int_rate' => 12,
                'default_origination_fee_rate' => 1,
                'default_service_fee_rate' => 1.5
            ],
            [
                'loantype' => 'Ag-Vest',
                'default_due_date' => '-3-15',
                'abr' => 'VST',
                'sort_order' => 6,
                'default_int_rate' => 12,
                'default_origination_fee_rate' => 0,
                'default_service_fee_rate' => 4
            ],
            [
                'loantype' => 'Grain Storage',
                'default_due_date' => '-3-15',
                'abr' => 'STO',
                'sort_order' => 7,
                'default_int_rate' => 12,
                'default_origination_fee_rate' => 1,
                'default_service_fee_rate' => 1.5
            ]
        ];

        foreach ($collection as $record) {
            Loantype::create($record);
        }
    }
}
