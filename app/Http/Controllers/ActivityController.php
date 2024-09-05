<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserActivity;
use Illuminate\Support\Facades\Auth;

class ActivityController extends Controller
{
    public function index()
    {
        // Retrieve only the activities of the logged-in user
        $activities = UserActivity::where('user_id', Auth::id())->orderBy('created_at', 'desc')->paginate(10);

        return view('console.activities.index', compact('activities'));
    }
}
