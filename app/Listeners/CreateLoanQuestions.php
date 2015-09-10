<?php

namespace App\Listeners;

use App\Events\LoanWasCreated;
use App\Loanquestion;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CreateLoanQuestions
{
    public function __construct()
    {
        //
    }

    public function handle(LoanWasCreated $event)
    {
        $q = Loanquestion::create([
            'loan_id' => $event->loan->id
        ]);
    }
}
