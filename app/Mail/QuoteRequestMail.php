<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Attachment;



class QuoteRequestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $quote_request;

    public function __construct($quote_request)
    {
        $this->quote_request = $quote_request;
    }


    public function envelope()
    {
        
        return new Envelope(
            from: new Address($this->quote_request['email'], $this->quote_request['fname'] . ' ' . $this->quote_request['lname']),
            subject: $this->quote_request['fname'] . ' ' . $this->quote_request['lname'],
        );
    }


    public function content()
    {
        return new Content(
            view: 'mail.quote_request_mail',
        );
    }

    public function attachments()
    {
        // for attaching from request direct
        if (isset($this->quote_request['file']))
                    return Attachment::fromData(fn () => file_get_contents($this->quote_request['file']), $this->quote_request['file']->getClientOriginalName())->withMime($this->quote_request['file']->getClientMimeType());
        return [];
    }
}
