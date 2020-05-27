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
     * @param View $view
     * @return void
     */
    public function compose(View $view)
    {
        $donors = \Cache::remember('donors', 60, function () {
            return \DB::table('donors')
                ->selectRaw('donors.*, sum(amount) as collected')
                ->leftJoin('donations', 'donors.id', '=', 'donations.referrer')
                ->where('is_volunteer', '=', true)
                ->groupBy('donors.id')
                ->orderBy('collected', 'desc')
                ->get();
        });
        $view->with('volunteers_select', $donors);
    }
}
