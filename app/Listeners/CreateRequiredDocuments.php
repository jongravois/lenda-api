<?php

namespace App\Listeners;

use App\Events\LoanWasCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CreateRequiredDocuments
{
    public function __construct()
    {
        //
    }

    public function handle(LoanWasCreated $event)
    {
        var_dump('Creating Loan Documents');
    }
}
