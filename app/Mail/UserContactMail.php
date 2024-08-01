<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserContactMail extends Mailable
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
        $this->contactdata = $contactdata;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.usermail')
                    ->subject('Thank you for your Submission')
                    ->with('contactdata', $this->contactdata);
    }
}
