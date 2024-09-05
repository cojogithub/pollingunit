<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\UserActivity; // Import the UserActivity model
use Illuminate\Support\Facades\Auth;

class GroupsController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $groups = Group::paginate(10);

        return view('console.groups', compact('user', 'groups'));
    }

    public function create()
    {
        return view('console.create-group');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string'
        ]);

        $group = Group::create([
            'name' => $request->name,
            'description' => $request->description,
            'user_id' => Auth::id()
        ]);

        // Log the activity
        UserActivity::create([
            'user_id' => Auth::id(),
            'activity_type' => 'group_created',
            'activity_description' => "You created a new group named {$group->name}.",
        ]);

        return redirect()->route('groups.index')->with('success', 'Group created successfully.');
    }

    public function show($id)
    {
        $group = Group::findOrFail($id);

        return view('console.group-details', compact('group'));
    }

    public function join($id)
    {
        $group = Group::findOrFail($id);
        $group->users()->attach(Auth::id());

        // Log the activity
        UserActivity::create([
            'user_id' => Auth::id(),
            'activity_type' => 'group_joined',
            'activity_description' => "You joined the group {$group->name}.",
        ]);

        return back()->with('success', 'Joined group successfully.');
    }

    public function leave($id)
    {
        $group = Group::findOrFail($id);
        $group->users()->detach(Auth::id());

        // Log the activity
        UserActivity::create([
            'user_id' => Auth::id(),
            'activity_type' => 'group_left',
            'activity_description' => "You left the group {$group->name}.",
        ]);

        return back()->with('success', 'Left group successfully.');
    }
}
