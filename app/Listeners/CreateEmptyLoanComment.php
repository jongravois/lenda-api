<?php

namespace App\Listeners;

use App\Comment;
use App\Events\LoanWasCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CreateEmptyLoanComment
{
    public function __construct()
    {
        //
    }

    public function handle(LoanWasCreated $event)
    {
        Comment::create([
            'loan_id' => $event->loan->id,
            'type' => 'Loan',
            'user_id' => $event->loan->user_id,
            'comment' => ''
        ]);
    }
}
