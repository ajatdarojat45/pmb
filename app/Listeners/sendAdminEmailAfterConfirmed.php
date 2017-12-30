<?php

namespace App\Listeners;

use App\Events\userConfirmed;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Payment;
use App\Mail\paymentStore;
use Illuminate\Support\Facades\Mail;

class sendAdminEmailAfterConfirmed
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Handle the event.
     *
     * @param  userConfirmed  $event
     * @return void
     */
    public function handle(userConfirmed $event)
    {
        Mail::to('admin@pmb.com')->send(new paymentStore($event->payment));
    }
}
