<?php

use App\Loanexception;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoanexceptionsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('loanexceptions')->delete();

        Loanexception::create([
            'loan_id'	=>	1,
            'exception_id'	=>	32,
            'msg'	=>	'Equipment discount rate used is non-standard'
        ]);
        Loanexception::create([
            'loan_id'	=>	1,
            'exception_id'	=>	34,
            'msg'	=>	"Claims discount rate used is non-standard"
        ]);
        Loanexception::create([
            'loan_id'	=>	1,
            'exception_id'	=>	40,
            'msg'	=>	"ARM Interest Rate and Distributor Interest Rate are not the same"
        ]);
        Loanexception::create([
            'loan_id'	=>	1,
            'exception_id'	=>	31,
            'msg'	=>	"Crop Insurance discount rate used is non-standard"
        ]);
        Loanexception::create([
            'loan_id'	=>	1,
            'exception_id'	=>	47,
            'msg'	=>	"This loan relies upon outstanding Crop Insurance Claims as collateral"
        ]);
        Loanexception::create([
            'loan_id'	=>	1,
            'exception_id'	=>	33,
            'msg'	=>	"Real-Estate discount rate used is non-standard"
        ]);
        Loanexception::create([
            'loan_id'	=>	1,
            'exception_id'	=>	50,
            'msg'	=>	"The crop insurance forecast plus FSA payments do not exceed the value of ARM Commitment"
        ]);
        Loanexception::create([
            'loan_id'	=>	1,
            'exception_id'	=>	3,
            'msg'	=>	"Applicant has outstanding loans at ARM"
        ]);
        Loanexception::create([
            'loan_id'	=>	1,
            'exception_id'	=>	30,
            'msg'	=>	"FSA assignment discount rate used is non-standard"
        ]);
        Loanexception::create([
            'loan_id'	=>	1,
            'exception_id'	=>	18,
            'msg'	=>	"Applicant is rated 'B'"
        ]);
        Loanexception::create([
            'loan_id'	=>	1,
            'exception_id'	=>	23,
            'msg'	=>	"Applicant has yield history that is less than break-even for soybeans"
        ]);

        Loanexception::create([
            'loan_id'	=>	2,
            'exception_id'	=>	32,
            'msg'	=>	'Equipment discount rate used is non-standard'
        ]);
        Loanexception::create([
            'loan_id'	=>	2,
            'exception_id'	=>	40,
            'msg'	=>	"ARM Interest Rate and Distributor Interest Rate are not the same"
        ]);
        Loanexception::create([
            'loan_id' => 2,
            'exception_id' => 23,
            'msg' => "Applicant has yield history that is less than break-even for rice"
        ]);
    }
}
