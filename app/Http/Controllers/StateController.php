<?php

namespace App\Http\Controllers;

use App\Models\State; // Import the State model
use Illuminate\Http\Request;
use App\Http\Controllers\Controller; // Import the Controller class

class StateController extends Controller
{
    public function showForm()
    {
        $states = State::pluck('name', 'id'); // Fetch states with id as key and name as value
        return view('form', compact('states')); // Pass states to the view
    }

    public function submitForm(Request $request)
    {
        // Handle form submission logic
    }
}
