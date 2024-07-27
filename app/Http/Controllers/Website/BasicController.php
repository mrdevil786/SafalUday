<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BasicController extends Controller
{
    public function home()
    {
        return view('site.home');
    }

    public function about()
    {
        return view('site.about');
    }

    public function contact()
    {
        return view('site.contact');
    }

    public function privacy_policy()
    {
        return view('site.privacy-policy');
    }

    public function terms_of_service()
    {
        return view('site.terms-of-service');
    }

    public function program()
    {
        return view('site.program');
    }
    
    public function event()
    {
        return view('site.event');
    }
}
