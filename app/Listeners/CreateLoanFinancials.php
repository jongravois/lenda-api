<?php

namespace App\Listeners;

use App\Events\LoanWasCreated;
use App\Globvar;
use App\Loanfinancial;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CreateLoanFinancials
{
    public function __construct()
    {
        //
    }

    public function handle(LoanWasCreated $event)
    {
        $globs = Globvar::all();
        $g = $globs[0];

        $q = Loanfinancial::create([
            'loan_id' => $event->loan->id,
            'fee_processing' => (double)$g->proc_fee_rate,
            'fee_service' => (double)$g->svc_fee_rate,
            'int_percent_arm'	=> (double)$g->int_percent_arm,
            'int_percent_arm_default' => (double)$g->int_percent_arm,
            'int_percent_arm_orig' => (double)$g->int_percent_arm,
            'int_percent_dist' => (double)$g->int_percent_dist,
            'int_percent_other' => 0
        ]);
    }
}
