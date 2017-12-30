<?php

namespace App\Listeners;

use App\Events\paymentValidation;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Mail\paymentStore;
use Illuminate\Support\Facades\Mail;

class sendUserEmailAfterPaymentValidation
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
     * @param  paymentValidation  $event
     * @return void
     */
    public function handle(paymentValidation $event)
    {
        Mail::to($event->payment->peserta->email)->send(new paymentStore($event->payment));
    }
}
