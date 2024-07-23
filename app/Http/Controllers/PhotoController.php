<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function index()
    {
        // Dummy photos array, replace with actual data fetching logic
        $photos = [
            (object) ['url' => 'path/to/photo1.jpg', 'title' => 'Photo 1'],
            (object) ['url' => 'path/to/photo2.jpg', 'title' => 'Photo 2'],
        ];

        return view('console.photos', compact('photos'));
    }
}
