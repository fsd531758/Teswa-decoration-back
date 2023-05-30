<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;


class ContactUsMail extends Mailable
{
    use Queueable, SerializesModels;

    public $contact_us;

    public function __construct($contact_us)
    {
        $this->contact_us = $contact_us;
    }


    public function envelope()
    {
        return new Envelope(
            from: new Address($this->contact_us->email, $this->contact_us->fname .' '. $this->contact_us->lname),
            subject: $this->contact_us->fname .' '. $this->contact_us->lname,
        );
    }


    public function content()
    {
        return new Content(
            view: 'mail.contact_us_mail',
        );
    }

    public function attachments()
    {
        return [];
    }
}
