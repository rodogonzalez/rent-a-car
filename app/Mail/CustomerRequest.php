<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CustomerRequest extends Mailable
{
    use Queueable, SerializesModels;
    private $msg = "";

    /**
     * Create a new message instance.
     */
    public function __construct($msg)
    {
        //
        $this->msg = $msg;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Customer Request',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.request',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }


    public function build()
    {
//dd($this->msg);

        //$this->data["nombre"] = "Rodolfo Gonzalez :) ";
        return $this->view('emails.request')
            ->subject('Solicitud de Reserva')
            ->with('msg', $this->msg);
    }
}
