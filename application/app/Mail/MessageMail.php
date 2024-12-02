<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MessageMail extends Mailable
{
    
        use Queueable, SerializesModels;
    
        public $data; // Données pour la vue
    
        public function __construct($data)
        {
            $this->data = $data;
        }
    
        public function build()
        {
            return $this->from("smartboard@gmail.com") // L'expéditeur
                        ->subject("Message via le SMTP Google") // Le sujet
                        ->view('emails.message-mail'); // La vue
        }
    
}
