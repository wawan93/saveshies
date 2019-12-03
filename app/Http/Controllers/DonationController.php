<?php

namespace App\Http\Controllers;

use App\Donation;
use App\Donor;
use App\Mail\DonationSuccessful;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class DonationController extends Controller
{
    public function donate(Request $request)
    {
        $donor = Donor::firstOrCreate(
            ['email' => $request->get('email')],
            $request->only([
                'email',
                'name',
                'surname',
                'referrer',
            ])
        );

        $amount = $request->get('amount') ?? $request->get('amount-fix');
        $donation = Donation::create([
            'donor_id' => $donor->id,
            'amount' => $amount,
            'referrer' => (int)$request->get('referrer'),
            'project_id' => 0, // TODO: $request->get('project_id')
        ]);

        if ($donation === null) {
            throw new BadRequestHttpException();
        }

        \Mail::to($donor)->send(new DonationSuccessful($donation));

        return response()->redirectTo('thank-you');
    }

    public function uploadPhoto(Request $request)
    {
        if ($request->hasFile('file')) {
            $filename = $request->file('file')->getFilename() .
                '.' . $request->file('file')->getClientOriginalExtension();
            $request->file('file')->storeAs('avatars', $filename, 'public');
        }

        return redirect()->to('volunteers');
    }

}
