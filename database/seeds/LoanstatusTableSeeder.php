<?php

use App\Loanstatus;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoanstatusTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('loanstatus')->delete();

        $collection = [
            [
                'status'  =>  'In-Progress',
                'iconClass'	=> 'glyphicon-wrench',
                'iconColor'	=>	'#000099'
            ],
            [
                'status'  =>  'Recommended',
                'iconClass'	=> 'glyphicon-wrench',
                'iconColor'	=>	'#000099'
            ],
            [
                'status'  =>  'Approved',
                'iconClass'	=> 'glyphicon-thumbs-up',
                'iconColor'	=>	'#009900'
            ],
            [
                'status'  =>  'Denied',
                'iconClass'	=> 'glyphicon-thumbs-down',
                'iconColor'	=>	'#990000'
            ],
            [
                'status'  =>  'Withdrawn',
                'iconClass'	=> 'glyphicon-remove-sign',
                'iconColor'	=>	'#E0A02D'
            ],
            [
                'status'  =>  'Paid',
                'iconClass'	=> 'glyphicon-ok',
                'iconColor'	=>	'#009900'
            ]
        ];

        foreach ($collection as $record) {
            Loanstatus::create($record);
        }
    }
}
