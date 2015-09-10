<?php

namespace App\Listeners;

use App\Events\LoanWasCreated;
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
        $q = Loanfinancial::create([
            'loan_id' => $event->loan->id
        ]);
        var_dump('Created Loan Financials Record #' . $q->id);
    }
}
