<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::where('user_id', Auth::id())->orderBy('created_at', 'desc')->get();
        return view('console.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('console.posts.create');
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'content' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Create a new post instance
        $post = new Post;
        $post->user_id = Auth::id();
        $post->content = $request->input('content');

        // Handle the image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            // Store the image and get its path
            $imagePath = $image->store('images', 'public');
            $post->image_path = $imagePath;
        }

        // Save the post
        $post->save();

        // Redirect with success message
        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }
}
