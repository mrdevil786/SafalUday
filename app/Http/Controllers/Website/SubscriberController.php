<?php

namespace App\Http\Controllers\Website;

use App\Models\Subscriber;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewSubscriberNotification;

class SubscriberController extends Controller
{
    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:subscribers,email',
        ], [
            'email.unique' => 'Already Subscribed!',
        ]);

        $subscriber = Subscriber::create([
            'email' => $request->email,
        ]);

        Mail::to($subscriber->email)->send(new NewSubscriberNotification());

        return redirect()->back()->with('success', 'Subscribed successfully!');
    }

    public function unsubscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:subscribers,email',
        ]);

        Subscriber::where('email', $request->email)->delete();

        return redirect()->back()->with('success', 'Unsubscribed successfully!');
    }
}
