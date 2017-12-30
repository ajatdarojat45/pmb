<?php

namespace App\Mail;

use App\Peserta;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class sendUserEmailAfterRegister extends Mailable
{
    use Queueable, SerializesModels;

    public $peserta;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Peserta $peserta)
    {
        $this->peserta = $peserta;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.pesertas.register');
    }
}
