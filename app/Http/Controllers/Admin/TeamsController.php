<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\FileUploader;
use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamsController extends Controller
{
    // RETRIEVE ALL TEAMS AND DISPLAY THEM IN A VIEW
    public function index()
    {
        $teams = Team::all();
        return view('admin.team.index', compact('teams'));
    }

    // CREATE PAGE FOR A SPECIFIC TEAM
    public function create()
    {
        return view('admin.team.create');
    }

    // VALIDATE AND STORE A NEW TEAM
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'image' => 'required|string|max:255',
            'profile_link' => 'required|string|max:255',
            'section' => 'required|string|max:255',
        ]);

        $team = new Team();
        $team->name = $request->name;
        $team->designation = $request->designation;
        $team->image = FileUploader::uploadFile($request->file('image'), 'images/team-image');
        $team->profile_link = $request->profile_link;
        $team->section = $request->section;

        $team->save();

        return redirect()->route('admin.team.index')->with('success', 'User registered successfully!');
    }

    // FIND A SPECIFIC TEAM AND SHOW THE EDIT FORM
    public function edit($id)
    {
        $team = Team::findOrFail($id);
        $isEdit = true;
        return view('admin.team.edit', compact('team', 'isEdit'));
    }

    // VIEW A SPECIFIC TEAM
    public function view($id)
    {
        $team = Team::findOrFail($id);
        $isEdit = false;
        return view('admin.team.edit', compact('team', 'isEdit'));
    }

    // UPDATE A TEAM'S DETAILS
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email,' . $request->id,
            'role' => 'required|in:1,2,3',
            'avatar' => 'mimes:png,jpg,jpeg,webp,svg,gif',
        ]);

        $team = Team::findOrFail($request->id);

        $team->name = $request->name;
        $team->email = $request->designation;

        if ($request->hasFile('avatar')) {
            $team->avatar = FileUploader::uploadFile($request->file('image'), 'images/admin-avatar', $team->image);
        }

        $team->save();

        return redirect()->route('admin.users.index')->with('success', 'User updated successfully!');
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

    // DELETE A USER
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.users.index')->with('success', 'User deleted successfully!');
    }
}
