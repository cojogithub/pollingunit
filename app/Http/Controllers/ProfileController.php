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
        $friends = $user->friends()->paginate(10);
        $posts = $user->posts()->orderBy('created_at', 'desc')->get();
        $messages = $user->receivedMessages()->orderBy('created_at', 'desc')->get();

        return view('console.profile', compact('user', 'friends', 'posts', 'messages'));
    }

    // Show the edit profile page
    public function edit()
    {
        $user = Auth::user();
        return view('console.account-settings', compact('user'));
    }

    // Update the profile
    public function update(Request $request)
    {
        $user = Auth::user();
        $user->update($request->only('name', 'email', 'company', 'phone', 'bio', 'birthday', 'twitter', 'facebook', 'google_plus', 'linkedin', 'instagram'));

        if ($request->hasFile('profile_image')) {
            $user->profile_image = $request->file('profile_image')->store('profile_images', 'public');
            $user->save();
        }

        return redirect()->route('account.settings')->with('success', 'Profile updated successfully.');
    }

}
