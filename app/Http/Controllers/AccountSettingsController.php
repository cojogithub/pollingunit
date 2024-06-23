<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountSettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
        $user = Auth::user();
        return view('account.settings', compact('user'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'lastname' => 'sometimes|required|string|max:255',
            'email' => 'required|email|unique:users,email,' . Auth::id(),
            'phone' => 'nullable|string|max:15',
            'bio' => 'nullable|string',
            'birthday' => 'nullable|date',
            'profile_image' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
        ]);

        $user = Auth::user();
        $user->update($request->only('lastname', 'email', 'phone', 'bio', 'birthday'));

        if ($request->hasFile('profile_image')) {
            $imagePath = $request->file('profile_image')->store('profiles', 'public');
            $user->update(['profile_image' => $imagePath]);
        }

        return redirect()->route('account.settings')->with('success', 'Profile updated successfully.');
    }
}
