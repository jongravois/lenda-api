<?php

namespace App\Listeners;

use App\Events\LoanWasCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class LoanCreated
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  LoanWasCreated  $event
     * @return void
     */
    public function handle(LoanWasCreated $event)
    {
        //
    }
}
