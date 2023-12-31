<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }


    public function build()
    {
        return $this->view('system.emails.contact');
        // return $this->from($this->details['email'])
        //     ->to('mostafa.elnemr50@gmail.com')
        //     ->view('emails.contact')
        //     ->with([
        //         'contact' => $this->details['message']
        //     ]);
    }
}
