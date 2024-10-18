<?php

namespace App\Http\Controllers;

use App\Models\State;
use Illuminate\Http\Request;

class StateController extends Controller
{
    public function showForm()
    {
        $states = State::pluck('name', 'id');
        return view('form', compact('states'));
    }

    public function submitForm(Request $request)
    {
        // Handle form submission logic
    }
}