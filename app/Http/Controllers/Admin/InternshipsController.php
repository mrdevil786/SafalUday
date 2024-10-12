<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Internship;
use Illuminate\Http\Request;

class InternshipsController extends Controller
{
    public function index()
    {
        $intern = Internship::all();
        return view('admin.internship.index', compact('intern'));
    }

    // DELETE A Job
    public function destroy($id)
    {
        $intern = Internship::findOrFail($id);
        $intern->delete();

        return redirect()->route('admin.internships.index')->with('success', 'Internship deleted successfully!');
    }
}
