<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubscribeController extends Controller
{
    public function storePaymentMethod()
    {
        $user = Auth::user();

        if (! $user)
        {
            return redirect('login');
        }

        return view('subscribe', [
            'intent' => $user->createSetupIntent()
        ]);
    }

    public function subscribe(Request $request)
    {
        $user = Auth::user();

        if (!$user->subscribed())
        {
            // 'create' method will automatically store customers payment method
            $user->newSubscription('subscription', $request->plan)->create($paymentMethod); 
        }

        redirect()
        ->route('confirmation')
        ->with('subscriptionSuccessMessage', 'You have successfully subscribed. See you around!');
    }
}
