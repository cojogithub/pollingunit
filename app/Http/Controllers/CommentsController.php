<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
use App\Models\UserActivity; // Import the UserActivity model
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    /**
     * Store a new comment on a post.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request, Post $post)
    {
        // Validate the request input
        $request->validate([
            'content' => 'required|string|max:1000',
        ]);

        try {
            // Create a new comment
            $comment = new Comment();
            $comment->user_id = Auth::id();
            $comment->post_id = $post->id;
            $comment->content = $request->input('content');
            $comment->save();

            // Log the user activity
            UserActivity::create([
                'user_id' => Auth::id(),
                'activity_type' => 'comment_added',
                'activity_description' => 'Added a comment on post ID ' . $post->id . ': "' . $request->input('content') . '"',
            ]);

            return redirect()->route('posts.index')->with('success', 'Comment added successfully.');

        } catch (\Exception $e) {
            // Handle any errors that occur during the comment creation process
            return redirect()->route('posts.index')->with('error', 'An error occurred while adding the comment: ' . $e->getMessage());
        }
    }
}
