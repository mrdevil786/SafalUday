<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Volunteer;
use Illuminate\Http\Request;

class VolunteersController extends Controller
{
    public function index()
    {
        $volunteers = Volunteer::all();
        return view('admin.volunteer.index', compact('volunteers'));
    }

    // DELETE A Volunteer
    public function destroy($id)
    {
        $volunteer = Volunteer::findOrFail($id);
        $volunteer->delete();

        return redirect()->route('admin.volunteers.index')->with('success', 'Volunteer deleted successfully!');
    }
}
