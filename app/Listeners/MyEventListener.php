<?php

namespace App\Listeners;

use App\Events\MyEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class MyEventListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(MyEvent $event): void
    {
        // info("User id is " . $event->user);
        // return $event->user;
    }
}