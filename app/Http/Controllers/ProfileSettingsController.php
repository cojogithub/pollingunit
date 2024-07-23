<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    // Show the profile page
    public function show($id = null)
    {
        $user = $id ? User::find($id) : Auth::user();

        if (!$user) {
            return redirect()->route('home')->with('error', 'User not found');
        }

        $friends = $user->friends()->paginate(10);
        $posts = $user->posts()->orderBy('created_at', 'desc')->get();
        $messages = $user->receivedMessages()->orderBy('created_at', 'desc')->get();

        return view('console.profile', compact('user', 'friends', 'posts', 'messages'));
    }

    // Show the edit profile page
    public function edit()
    {
        $user = Auth::user();

        if (!$user) {
            return redirect()->route('home')->with('error', 'User not found');
        }

        return view('console.profile-settings', compact('user'));
    }

    // Update the profile
    public function update(Request $request)
    {
        $user = Auth::user();

        if (!$user) {
            return redirect()->route('home')->with('error', 'User not found');
        }

        $request->validate([
            'firstname' => 'sometimes|required|string|max:255',
            'lastname' => 'sometimes|required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'phone' => 'nullable|string|max:255',
            'bio' => 'nullable|string',
            'profile_image' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
            'jobposition' => 'nullable|string|max:255',
            'company' => 'nullable|string|max:255',
            'twitter' => 'nullable|string|max:255',
            'facebook' => 'nullable|string|max:255',
            'linkedin' => 'nullable|string|max:255',
            'instagram' => 'nullable|string|max:255',
        ]);

        $user->update([
            'firstname' => $request->input('firstname', $user->firstname),
            'lastname' => $request->input('lastname', $user->lastname),
            'email' => $request->input('email', $user->email),
            'phone' => $request->input('phone', $user->phone),
            'bio' => $request->input('bio', $user->bio),
            'jobposition' => $request->input('jobposition', $user->jobposition),
            'company' => $request->input('company', $user->company),
            'twitter' => $request->input('twitter', $user->twitter),
            'facebook' => $request->input('facebook', $user->facebook),
            'linkedin' => $request->input('linkedin', $user->linkedin),
            'instagram' => $request->input('instagram', $user->instagram),
        ]);

        if ($request->hasFile('profile_image')) {
            $imagePath = $request->file('profile_image')->store('profiles', 'public');
            $user->update(['profile_image' => $imagePath]);
        }

        return redirect()->route('profile.settings')->with('success', 'Profile updated successfully.');
    }
}
