<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Connection;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ConnectionsController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $connections = $user->connections()->paginate(10);

        return view('console.connections', compact('user', 'connections'));
    }

    public function add(Request $request)
    {
        $request->validate([
            'friend_id' => 'required|exists:users,id'
        ]);

        Connection::create([
            'user_id' => Auth::id(),
            'friend_id' => $request->friend_id
        ]);

        return back()->with('success', 'Connection added successfully.');
    }

    public function remove($id)
    {
        $connection = Connection::where('user_id', Auth::id())
                                ->where('friend_id', $id)
                                ->firstOrFail();
        $connection->delete();

        return back()->with('success', 'Connection removed successfully.');
    }
}
