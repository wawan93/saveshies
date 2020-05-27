<?php

namespace App\Mail;

use App\Donor;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VolunteerRegistered extends Mailable
{
    use Queueable, SerializesModels;

    private $donor = null;

    /**
     * Create a new message instance.
     *
     * @param Donor $donor
     */
    public function __construct(Donor $donor)
    {
        $this->donor = $donor;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.volunteer-registered', [
            'donor' => $this->donor,
        ]);
    }
}
