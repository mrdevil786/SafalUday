<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\FileUploader;
use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamsController extends Controller
{
    // RETRIEVE ALL USERS AND DISPLAY THEM IN A VIEW
    public function index()
    {
        $teams = Team::all();
        return view('admin.team.index', compact('teams'));
    }

    // CREATE PAGE FOR A SPECIFIC USER
    public function create()
    {
        return view('admin.user.create');
    }

    // VALIDATE AND STORE A NEW USER
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'image' => 'required|string|max:255',
            'profile_link' => 'required|string|max:255',
        ]);

        $team = new Team();
        $team->name = $request->name;
        $team->designation = $request->designation;
        $team->profile_link = $request->profile_link;
        $team->image = FileUploader::uploadFile($request->file('image'), 'images/team-image');

        $team->save();

        return redirect()->route('admin.users.index')->with('success', 'User registered successfully!');
    }

    // UPDATE USER'S STATUS (ACTIVE OR BLOCKED)
    public function status(Request $request)
    {
        $request->validate([
            'id' => 'required|numeric|exists:teams,id',
            'status' => 'required|in:active,blocked',
        ]);

        $team = Team::findOrFail($request->id);
        $team->update(['status' => $request->status]);

        return response()->json(['message' => 'Team status updated successfully']);
    }
}
