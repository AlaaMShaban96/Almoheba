<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactUs extends Mailable
{
    use Queueable, SerializesModels;
    public $contactUs;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( $contactUs)
    {
        $this->contactUs = $contactUs;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        
        return $this->from('info@almawhiba.ly')
                ->view('emails.contactUs')
                ->with([
                    'data' => $this->contactUs->all()
                ]);
    }
}
