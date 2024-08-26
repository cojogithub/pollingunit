<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Poll;

class PoliticalConnectionController extends Controller
{
    /**
     * Display the political connection page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $posts = Post::with('user', 'comments.user')->get();
        $polls = Poll::with('options')->get();

        return view('console.political-connection', compact('posts', 'polls'));
    }
}
