<?php

namespace App\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class UserWasCreated extends Event
{
    use SerializesModels;

    public function __construct()
    {
        //
    }

    public function broadcastOn()
    {
        return [];
    }
}
