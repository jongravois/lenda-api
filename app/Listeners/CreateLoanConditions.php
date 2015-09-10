<?php

namespace App\Listeners;

use App\Condition;
use App\Events\LoanWasCreated;
use App\Globvar;
use App\Loancondition;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CreateLoanConditions
{
    public function __construct()
    {
        //
    }

    public function handle(LoanWasCreated $event)
    {
        $cons = Condition::where('loantype_id', $event->loan->loan_type_id)->get();

        $globs = Globvar::all();
        $g = $globs[0];

        foreach ($cons as $con) {
            Loancondition::create([
                'loan_id' => $event->loan->id,
                'crop_year'	=>	$g->crop_year,
                'category'	=>	'loan',
                'condition'	=>	$con->condition
            ]);
        }    }
}
