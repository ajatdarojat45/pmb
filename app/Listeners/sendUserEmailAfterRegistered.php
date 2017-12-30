<?php

namespace App\Listeners;

use App\Events\userRegistered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use Illuminate\Support\Facades\Mail;
use App\Mail\sendUserEmailAfterRegister;

class sendUserEmailAfterRegistered
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
     * @param  userRegistered  $event
     * @return void
     */
    public function handle(userRegistered $event)
    {
        Mail::to($event->peserta->email)->send(new sendUserEmailAfterRegister($event->peserta));
    }
}
