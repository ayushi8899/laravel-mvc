<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
//use Illuminate\Mail\Mailables\Content;
//use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class RegisterMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->data=$data;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    //public function envelope()
    //{
    //    return new Envelope(
    //        subject: 'Register Mail',
    //    );
    //}

    //sendind thanks note from registerMail
    public function build()
    {
        return $this->from('araniyaayushi@gmail.com')->subject('Thanks for register with us')->view('crudapp.registermail')->with('data',$this->data);
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    //public function content()
    //{
    //    return new Content(
    //        view: 'view.name',
    //    );
    //}

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    //public function attachments()
    //{
    //    return [];
    //}
}
