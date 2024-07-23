<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
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

        Group::create([
            'name' => $request->name,
            'description' => $request->description,
            'user_id' => Auth::id()
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

        return back()->with('success', 'Joined group successfully.');
    }

    public function leave($id)
    {
        $group = Group::findOrFail($id);
        $group->users()->detach(Auth::id());

        return back()->with('success', 'Left group successfully.');
    }
}
