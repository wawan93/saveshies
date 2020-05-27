<?php

namespace App\Observers;

use App\Donor;

class DonorObserver
{
    public function creating(Donor $donor)
    {
        $donor->uuid = \Str::random(20);
    }
}
