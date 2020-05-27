<?php

namespace App\Mail;

use App\Donation;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DonationSuccessful extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var Donation|null $donation
     */
    public $donation = null;

    /**
     * Create a new message instance.
     *
     * @param Donation $donation
     */
    public function __construct(Donation $donation)
    {
        $this->donation = $donation;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.donation-successful', [
            'donation' => $this->donation
        ]);
    }
}
