<?php

namespace App\Listeners;

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
        //
    }
}
