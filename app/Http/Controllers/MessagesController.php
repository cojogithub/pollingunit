<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;

class MessagesController extends Controller
{
    public function index()
    {
        // Retrieve messages where the authenticated user is the receiver
        $messages = Message::where('receiver_id', Auth::id())
                            ->orderBy('created_at', 'desc')
                            ->paginate(10);

        return view('console.messages.index', compact('messages'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'receiver_id' => 'required|exists:users,id',
            'content' => 'required|string|max:255',
        ]);

        $message = new Message();
        $message->sender_id = Auth::id();
        $message->receiver_id = $request->receiver_id;
        $message->content = $request->content;
        $message->save();

        return redirect()->route('messages.index');
    }
}
