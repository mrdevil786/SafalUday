<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class BasicController extends Controller
{
    public function home()
    {
        $teams = Team::where('status', 1)
            ->orderBy('created_at', 'asc')
            ->get();
        return view('site.home', compact('teams'));
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
    public function refund_policy()
    {
        return view('site.refund-policy');
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
