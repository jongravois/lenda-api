<?php

namespace App\Listeners;

use App\Events\LoanWasCreated;
use App\Loantype;
use App\Termsmodification;
use Carbon\Carbon;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CreateTermMod
{
    public function __construct()
    {
        //
    }

    public function handle(LoanWasCreated $event)
    {
        $loantype = Loantype::where('id', $event->loan->loan_type_id)->get();
        $d = $loantype[0];

        Termsmodification::create([
            'loan_id' => $event->loan->id,
            'due_date' => $event->loan->due_date,
            'est_days' => (integer)$d->default_est_days,
            'int_percent_arm' => (double)$d->default_int_rate,
            'int_percent_dist' => 0,
            'fee_processing_arm' => (double)$d->default_origination_fee_rate,
            'fee_service_arm' => (double)$d->default_service_fee_rate
        ]);
    }
}
