<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function store(Request $request)
    {
        // Validate input: ensure content is required and image is optional
        $request->validate([
            'content' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048' // Image should be valid and not exceed 2MB
        ]);

        $imagePath = null;

        // Check if the image file is uploaded and save it to the 'public/posts' directory
        if ($request->hasFile('image')) {
            // Save the image in the 'posts' directory within the 'public' disk
            $imagePath = $request->file('image')->store('posts', 'public');
        }

        // Create a new post record and store the image path (if uploaded)
        Post::create([
            'content' => $request->input('content'),
            'image_path' => $imagePath, // Save image path in the database
            'user_id' => Auth::id(), // Store the ID of the authenticated user
        ]);

        return redirect()->back()->with('success', 'Post created successfully!');
    }

    // Show post with image
    public function show($id)
    {
        // Find the post by ID and pass it to the view
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }
}
