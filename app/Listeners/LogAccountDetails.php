<?php

namespace App\Listeners;

use App\Events\AccountUpdated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class LogAccountDetails
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
     * @param  AccountUpdated  $event
     * @return void
     */
    public function handle(AccountUpdated $event)
    {
        info('Updated User: ', $event->user->toArray());
    }
}
