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
        $post = new Post;
        $post->user_id = Auth::id();
        $post->content = $request->input('content');
        $post->save();

        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }
}
