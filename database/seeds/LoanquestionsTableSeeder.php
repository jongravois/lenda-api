<?php

use App\Loanquestion;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoanquestionsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('loanquestions')->delete();

        Loanquestion::create([
            'loan_id' 	=> 	1,
            'amount_requested' => 75000,
            'plant_own'		=>	1,
            'harvest_own'	=>	1,
            'equip_obligations'	=>	1,
            'other_cash'	=>	1,
            'fsa_good'		=>	1,
            'fci_good'		=>	1,
            'premiums_past'	=>	1,
            'legal_defendant'	=>	0,
            'judgements'		=>	0,
            'bankruptcy'	=>	0,
            'liens'			=>	1,
            'fsa_direct_pay'	=>	1,
            'fsa_direct_pay_details' => 'Received $50,000 for field upgrade',
            'future_liabilities'	=>	1,
            'credit_3p_available'	=>	1,
            'credit_3p_details' => 'Monsato, John Deere',
            'income_percent'		=>	100,
            'distributor'		=>	'JSI',
            'agency'			=>	'State Farm of Monroe',
            'pesticide_number'	=>	'2T23765',
            'pest_num_expiration'	=>	'02/14/2018',
            'credit_score'	=>	730,
            'affiliates' => 1,
            'affiliated_entities'	=>	'Rutrum mi libero hymenaeos dolor posuere montes tristique litora cubilia.',
            'farm_supplier_creditors'	=>	'Rutrum mi libero hymenaeos dolor posuere montes tristique litora cubilia.'
        ]);

        Loanquestion::create([
            'loan_id' 	=> 	2,
            'amount_requested' => 75000,
            'plant_own'		=>	1,
            'harvest_own'	=>	1,
            'equip_obligations'	=>	1,
            'other_cash'	=>	1,
            'fsa_good'		=>	1,
            'fci_good'		=>	1,
            'premiums_past'	=>	1,
            'legal_defendant'	=>	0,
            'judgements'		=>	0,
            'bankruptcy'	=>	0,
            'liens'			=>	1,
            'fsa_direct_pay'	=>	1,
            'fsa_direct_pay_details' => 'Received $100,000 for interstate filler',
            'future_liabilities'	=>	1,
            'credit_3p_available'	=>	1,
            'credit_3p_details' => 'Monsato, John Deere',
            'income_percent'		=>	100,
            'distributor'		=>	'JSI',
            'agency'			=>	'State Farm of Monroe',
            'pesticide_number'	=>	'2T32765',
            'pest_num_expiration'	=>	'02/14/2018',
            'credit_score'	=>	770,
            'affiliates' => 0,
            'affiliated_entities'	=>	'',
            'farm_supplier_creditors'	=>	'Rutrum mi libero hymenaeos dolor posuere montes tristique litora cubilia.'
        ]);

        Loanquestion::create([
            'loan_id' 	=> 	3
        ]);

        Loanquestion::create([
            'loan_id' 	=> 	4
        ]);

        Loanquestion::create([
            'loan_id' 	=> 	5
        ]);

        Loanquestion::create([
            'loan_id' 	=> 	6,
            'amount_requested' => 35000,
            'insInPlace' => 1,
            'bankruptcy' => 1,
            'bankruptcy_details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum maximus dolor.',
            'bankruptcy_order' => 1,
            'credit_3p_available' => 1
        ]);

        Loanquestion::create([
            'loan_id' => 7,
            'insInPlace' => 0
        ]);

        Loanquestion::create([
            'loan_id' 	=> 	8
        ]);

        Loanquestion::create([
            'loan_id' 	=> 	9
        ]);
    }
}
