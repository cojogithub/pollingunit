<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    public function store(Request $request, Post $post)
    {
        $request->validate([
            'content' => 'required|string|max:1000',
        ]);

        $comment = new Comment;
        $comment->user_id = Auth::id();
        $comment->post_id = $post->id;
        $comment->content = $request->input('content');
        $comment->save();

        return redirect()->route('posts.index')->with('success', 'Comment added successfully.');
    }
}
