<?php

namespace App\Listeners;

use App\Events\LoanWasCreated;
use App\Globvar;
use App\Loandisc;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CreateLoanDiscounts
{
    public function __construct()
    {
        //
    }

    public function handle(LoanWasCreated $event)
    {
        $globs = Globvar::all();

        $q = Loandisc::create([
            'loan_id' => $event->loan->id,
            'disc_percent_crop' => (double)$globs->projected_crops_discount_rate,
            'disc_percent_fsa' => (double)$globs->fsa_assignment_discount_rate,
            'disc_percent_ins' => (double)$globs->ins_discount_rate,
            'disc_percent_insoyield' => (double)$globs->ins_discount_insoyield,
            'disc_percent_nonrp' => (double)$globs->nonrp_discount_rate,
            'disc_percent_rphpe' => (double)$globs->rphpe_discount_rate,
            'disc_percent_suppins' => (double)$globs->supins_discount_rate,
            'disc_percent_prod' => (double)$globs->prod_discount_rate,
            'disc_percent_equipment' => (double)$globs->equipment_discount_rate,
            'disc_percent_realestate' => (double)$globs->realestate_discount_rate,
            'disc_percent_other' => (double)$globs->claims_discount_rate
        ]);
        var_dump('Created Loan Discounts Record #' . $q->id);
    }
}
