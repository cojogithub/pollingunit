<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        return redirect()->back();
    }

    public function removeFriend(Request $request)
    {
        $friend = User::find($request->friend_id);
        Auth::user()->friends()->detach($friend);
        return redirect()->back();
    }
}
