<?php

namespace App\Http\View\Composers;

use App\Donor;
use Illuminate\View\View;

class VolunteersComposer
{
    /**
     * Create a new profile composer.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('volunteers_select', Donor::volunteers()->get());
    }
}
