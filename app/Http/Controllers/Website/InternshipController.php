<?php

namespace App\Http\Controllers\Website;

use App\Helpers\FileUploader;
use App\Http\Controllers\Controller;
use App\Models\Internship;
use Illuminate\Http\Request;

class InternshipController extends Controller
{
    public function index()
    {
        return view("site.internship");
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mobile' => 'required|string|max:20',
            'address' => 'required|string|max:500',
            'resume' => 'required|file|mimes:pdf|max:2048',
        ]);

        $resume = $request->file('resume');
        $resumePath = FileUploader::uploadFile($resume, 'files/internship-resume');

        Internship::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'mobile' => $request->input('mobile'),
            'address' => $request->input('address'),
            'resume' => $resumePath,
        ]);

        return redirect()->back()->with('success', 'Applied successfully!');
    }
}
