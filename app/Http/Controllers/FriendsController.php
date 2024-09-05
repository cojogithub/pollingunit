<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserActivity; // Import the UserActivity model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FriendsController extends Controller
{
    public function index()
    {
        $friends = Auth::user()->friends;
        return view('console.friends.index', compact('friends'));
    }

    public function addFriend(Request $request)
    {
        $friend = User::find($request->friend_id);
        Auth::user()->friends()->attach($friend);

        // Log the activity
        UserActivity::create([
            'user_id' => Auth::id(),
            'activity_type' => 'friend_added',
            'activity_description' => "You added {$friend->firstname} {$friend->lastname} as a friend.",
        ]);

        return redirect()->back();
    }

    public function removeFriend(Request $request)
    {
        $friend = User::find($request->friend_id);
        Auth::user()->friends()->detach($friend);

        // Log the activity
        UserActivity::create([
            'user_id' => Auth::id(),
            'activity_type' => 'friend_removed',
            'activity_description' => "You removed {$friend->firstname} {$friend->lastname} from your friends list.",
        ]);

        return redirect()->back();
    }
}
