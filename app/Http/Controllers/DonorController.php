<?php

namespace App\Http\Controllers;

use App\Donor;
use App\Mail\VolunteerRegistered;
use Illuminate\Http\Request;

class DonorController extends Controller
{
    public function registerVolunteer(Request $request)
    {
        $requestData = $request->only([
            'email',
            'phone',
            'name',
            'surname',
            'tg',
            'vk',
            'inst',
            'fb',
            'referrer',
        ]);

        if ($request->hasFile('photo')) {
            $filename = $request->file('photo')->getFilename() .
                '.' . $request->file('photo')->getClientOriginalExtension();
            $requestData['photo'] = $request->file('photo')->storeAs('avatars', $filename, 'public');
        }

        $donor = Donor::firstOrCreate(['email' => $requestData['email']], $requestData);
        $donor->update($requestData);

        \Mail::to($donor)->send(new VolunteerRegistered($donor));

        return redirect()->to('/ref/' . $donor->uuid);
    }
}
