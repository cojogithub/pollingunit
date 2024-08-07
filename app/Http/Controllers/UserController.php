<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'gender' => 'required|string|max:10',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'voter_id' => 'nullable|string|max:255',
            'nin_bvn' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:20',
            'dob' => 'nullable|date',
            'address' => 'required|string|max:255',
            'state_id' => 'required|integer',
            'senatorial_district_id' => 'required|integer',
            'federal_constituency_id' => 'required|integer',
            'lga_id' => 'required|integer',
            'ward_id' => 'required|integer',
            'polling_unit_id' => 'required|integer',
            'profile_image' => 'nullable|image|max:2048'
        ]);

        $user = new User();
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->gender = $request->gender;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->voter_id = $request->voter_id;
        $user->nin_bvn = $request->nin_bvn;
        $user->phone = $request->phone;
        $user->dob = $request->dob;
        $user->address = $request->address;
        $user->state_id = $request->state_id;
        $user->senatorial_district_id = $request->senatorial_district_id;
        $user->federal_constituency_id = $request->federal_constituency_id;
        $user->lga_id = $request->lga_id;
        $user->ward_id = $request->ward_id;
        $user->polling_unit_id = $request->polling_unit_id;

        if ($request->hasFile('profile_image')) {
            $path = $request->file('profile_image')->store('profile_images', 'public');
            $user->profile_image = $path;
        } else {
            $user->profile_image = 'img/avatar-6.png';
        }

        $user->save();

        Auth::login($user);

        return redirect()->route('dashboard')->with('success', 'Registration successful.');
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'lastname' => 'nullable|string|max:255',
            'email' => 'nullable|string|email|max:255|unique:users,email,' . $user->id,
            'phone' => 'nullable|string|max:20',
            'bio' => 'nullable|string|max:1000',
            'profile_image' => 'nullable|image|max:2048',
            'current_password' => 'nullable|string|min:8',
            'new_password' => 'nullable|string|min:8|confirmed'
        ]);

        if ($request->lastname && !$user->last_name_changed) {
            $user->lastname = $request->lastname;
            $user->last_name_changed = true;
        }

        if ($request->email) {
            $user->email = $request->email;
        }

        if ($request->phone) {
            $user->phone = $request->phone;
        }

        if ($request->bio) {
            $user->bio = $request->bio;
        }

        if ($request->hasFile('profile_image')) {
            $path = $request->file('profile_image')->store('profile_images', 'public');
            $user->profile_image = $path;
        }

        if ($request->current_password && Hash::check($request->current_password, $user->password)) {
            $user->password = Hash::make($request->new_password);
        }

        $user->save();

        return redirect()->route('profile.show', ['id' => $user->id])->with('success', 'Profile updated successfully.');
    }
}
