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
        $g = $globs[0];

        $q = Loandisc::create([
            'loan_id' => $event->loan->id,
            'disc_percent_crop' => (double)$g->projected_crops_discount_rate,
            'disc_percent_fsa' => (double)$g->fsa_assignment_discount_rate,
            'disc_percent_ins' => (double)$g->ins_discount_rate,
            'disc_percent_insoyield' => (double)$g->ins_discount_insoyield,
            'disc_percent_nonrp' => (double)$g->yp_discount_rate,
            'disc_percent_rphpe' => (double)$g->rphpe_discount_rate,
            'disc_percent_suppins' => (double)$g->supins_discount_rate,
            'disc_percent_prod' => (double)$g->prod_discount_rate,
            'disc_percent_equipment' => (double)$g->equipment_discount_rate,
            'disc_percent_realestate' => (double)$g->realestate_discount_rate,
            'disc_percent_other' => (double)$g->claims_discount_rate
        ]);
    }
}
