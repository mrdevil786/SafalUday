<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactsController extends Controller
{
    public function send(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        Mail::to('safaludayngo@gmail.com')->send(new ContactFormMail($validatedData));

        // return view('site.contact')->with('success','Message Sent Successfully!');
        return redirect()->route('site.contact')->with('success', 'Message Sent Successfully!');
    }
}
