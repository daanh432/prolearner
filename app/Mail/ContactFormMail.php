<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;
    private $submission;

    /**
     * Create a new message instance.
     *
     * @param $validated
     */

    public function __construct($validated)
    {
        $this->submission = (object) $validated;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('prolearner@daanhendriks.nl', ["name" => "Contact Form Submission ProLearner"])->markdown('emails.ContactFormMail')->with([
            'submission' => $this->submission
        ]);
    }
}
