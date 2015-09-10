<?php

namespace App\Events;

use App\Events\Event;
use App\Loan;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class LoanWasCreated extends Event
{
    use SerializesModels;

    public $loan;

    public function __construct(Loan $loan)
    {
        $this->loan = $loan;
    }

    public function broadcastOn()
    {
        return [];
    }
}
