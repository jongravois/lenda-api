<?php

namespace App\Listeners;

use App\Committee;
use App\Defaultcommittee;
use App\Events\LoanWasCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CreateEmptyCommittee
{
    public function __construct()
    {
        //
    }

    public function handle(LoanWasCreated $event)
    {
        $coms = Defaultcommittee::where('loantype_id', $event->loan->loan_type_id)->get();

        foreach ($coms as $com) {
            Committee::create([
                'loan_id'	=>	$event->loan->id,
                'committee_role' => $com->committeerole
            ]);
        }
    }
}
