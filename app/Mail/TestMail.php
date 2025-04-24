<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct()
    {
        //
    }

    public function build()
    {
        return $this->from(env('MAIL_FROM_ADDRESS'))
            ->to('henrique.danielb@gmail.com')
            ->subject('Teste de Email')->view('emails.test');
    }
}
