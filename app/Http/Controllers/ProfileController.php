<?php

// ProfileController.php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show($id = null)
    {
        $user = $id ? User::with('lga')->find($id) : Auth::user()->load('lga');

        if (!$user) {
            return redirect()->route('home')->with('error', 'User not found');
        }

        $friends = $user->friends()->paginate(10);
        $posts = $user->posts()->orderBy('created_at', 'desc')->get();
        $messages = $user->receivedMessages()->orderBy('created_at', 'desc')->get();

        return view('console.profile', compact('user', 'friends', 'posts', 'messages'));
    }

    public function edit()
    {
        $user = Auth::user();

        if (!$user) {
            return redirect()->route('home')->with('error', 'User not found');
        }

        return view('console.profile-settings', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        if (!$user) {
            return redirect()->route('home')->with('error', 'User not found');
        }

        $request->validate([
            'lastname' => 'sometimes|required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'phone' => 'nullable|string|max:15',
            'bio' => 'nullable|string',
            'profile_image' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
        ]);

        $user->update([
            'lastname' => $request->input('lastname', $user->lastname),
            'email' => $request->input('email', $user->email),
            'phone' => $request->input('phone', $user->phone),
            'bio' => $request->input('bio', $user->bio),
        ]);

        if ($request->hasFile('profile_image')) {
            $imagePath = $request->file('profile_image')->store('profiles', 'public');
            $user->update(['profile_image' => $imagePath]);
        }

        return redirect()->route('profile.edit')->with('success', 'Profile updated successfully.');
    }
}
