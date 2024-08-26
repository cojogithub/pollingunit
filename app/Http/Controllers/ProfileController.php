<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    // Show the profile page
    public function show($id = null)
    {
        // Fetch the user with associated LGA, or load the authenticated user
        $user = $id ? User::with('lga')->find($id) : User::with('lga')->find(Auth::id());

        if (!$user) {
            return redirect()->route('home')->with('error', 'User not found');
        }

        // Fetch friends, posts, and messages
        $friends = $user->friends()->paginate(10);
        $posts = $user->posts()->orderBy('created_at', 'desc')->get();
        $messages = $user->receivedMessages()->orderBy('created_at', 'desc')->get();

        // Return the profile view with the user's data
        return view('console.profile', compact('user', 'friends', 'posts', 'messages'));
    }

    // Show the edit profile page
    public function edit()
    {
        $user = User::with('lga')->find(Auth::id());

        if (!$user) {
            return redirect()->route('home')->with('error', 'User not found');
        }

        // Return the profile settings view with the user's data
        return view('console.profile-settings', compact('user'));
    }

    // Update the profile
    public function update(Request $request)
    {
        $user = Auth::user();

        if (!$user) {
            return redirect()->route('home')->with('error', 'User not found');
        }

        // Validate the incoming request
        $validator = Validator::make($request->all(), [
            'firstname' => 'sometimes|required|string|max:255',
            'lastname' => 'sometimes|required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'phone' => 'nullable|string|max:15',
            'bio' => 'nullable|string',
            'jobposition' => 'nullable|string|max:255',
            'company' => 'nullable|string|max:255',
            'twitter' => 'nullable|string|max:255',
            'facebook' => 'nullable|string|max:255',
            'google_plus' => 'nullable|string|max:255',
            'linkedin' => 'nullable|string|max:255',
            'instagram' => 'nullable|string|max:255',
            'youtube' => 'nullable|string|max:255', // Validation for YouTube link
            'profile_image' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->route('profile.settings.edit')
                ->withErrors($validator)
                ->withInput();
        }

        // Ensure $user is an instance of User
        if ($user instanceof User) {
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
                'google_plus' => $request->input('google_plus', $user->google_plus),
                'linkedin' => $request->input('linkedin', $user->linkedin),
                'instagram' => $request->input('instagram', $user->instagram),
                'youtube' => $request->input('youtube', $user->youtube),
            ]);

            // Handle profile image upload
            if ($request->hasFile('profile_image')) {
                $imagePath = $request->file('profile_image')->store('profiles', 'public');
                $user->update(['profile_image' => $imagePath]);
            }
        }

        // Redirect back with success message
        return redirect()->route('profile.settings.edit')->with('success', 'Profile updated successfully.');
    }
}
