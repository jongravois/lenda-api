<?php

use App\Defaultcommittee;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DefaultcommitteesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('defaultcommittees')->delete();

        $collection = [
            [
                'loantype_id' => 1,
                'committeerole' => 'CFO'
            ],
            [
                'loantype_id' => 1,
                'committeerole' => 'Regional'
            ],
            [
                'loantype_id' => 1,
                'committeerole' => 'Branch Manager'
            ],
            [
                'loantype_id' => 1,
                'committeerole' => 'Other Manager'
            ],
            [
                'loantype_id' => 1,
                'committeerole' => 'Optional'
            ],

            [
                'loantype_id' => 2,
                'committeerole' => 'CFO'
            ],
            [
                'loantype_id' => 2,
                'committeerole' => 'Regional'
            ],
            [
                'loantype_id' => 2,
                'committeerole' => 'Branch Manager'
            ],
            [
                'loantype_id' => 2,
                'committeerole' => 'Other Manager'
            ],
            [
                'loantype_id' => 2,
                'committeerole' => 'Optional'
            ],

            [
                'loantype_id' => 3,
                'committeerole' => 'Regional'
            ],
            [
                'loantype_id' => 3,
                'committeerole' => 'Branch Manager'
            ],
            [
                'loantype_id' => 3,
                'committeerole' => 'Optional'
            ],

            [
                'loantype_id' => 4,
                'committeerole' => 'Regional'
            ],
            [
                'loantype_id' => 4,
                'committeerole' => 'Branch Manager'
            ],
            [
                'loantype_id' => 4,
                'committeerole' => 'Optional'
            ],

            [
                'loantype_id' => 5,
                'committeerole' => 'Regional'
            ],
            [
                'loantype_id' => 5,
                'committeerole' => 'Branch Manager'
            ],

            [
                'loantype_id' => 6,
                'committeerole' => 'Regional'
            ],
            [
                'loantype_id' => 6,
                'committeerole' => 'Branch Manager'
            ],

            [
                'loantype_id' => 7,
                'committeerole' => 'Branch Manager'
            ]
        ];

        foreach ($collection as $record) {
            Defaultcommittee::create($record);
        }
    }
}
