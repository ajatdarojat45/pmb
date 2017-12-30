<?php

namespace App\Listeners;

use App\Events\userConfirmed;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Mail\paymentStore;
use Illuminate\Support\Facades\Mail;

class sendUserEmailAfterConfirmed
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
     * @param  userConfirmed  $event
     * @return void
     */
    public function handle(userConfirmed $event)
    {
        Mail::to($event->payment->peserta->email)->send(new paymentStore($event->payment));
    }
}
