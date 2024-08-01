<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AdminContactMail extends Mailable
{
    use Queueable, SerializesModels;
    public $contactdata;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contactdata)
    {
        //
        $this->contactdata=$contactdata;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.adminmail')
                    ->subject('New Contact')
                    ->with('contactdata', $this->contactdata);
    }
}
