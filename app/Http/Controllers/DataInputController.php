<?php

namespace App\Http\Controllers;

use App\Models\PollingUnitData;
use App\Models\UserActivity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DataInputController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'registered_voters' => 'nullable|integer',
            'accredited_voters' => 'nullable|integer',
            'void_votes' => 'nullable|integer',
            'election_result' => 'nullable|string',
        ]);

        // Get the existing data, if any
        $pollingUnitData = PollingUnitData::latest()->first();

        if ($pollingUnitData) {
            // Update the existing data with new values or keep old ones if null
            $pollingUnitData->update([
                'registered_voters' => $request->filled('registered_voters') ? $request->input('registered_voters') : $pollingUnitData->registered_voters,
                'accredited_voters' => $request->filled('accredited_voters') ? $request->input('accredited_voters') : $pollingUnitData->accredited_voters,
                'void_votes' => $request->filled('void_votes') ? $request->input('void_votes') : $pollingUnitData->void_votes,
                'election_result' => $request->filled('election_result') ? $request->input('election_result') : $pollingUnitData->election_result,
            ]);
        } else {
            // Create a new entry if none exists
            PollingUnitData::create([
                'registered_voters' => $request->input('registered_voters'),
                'accredited_voters' => $request->input('accredited_voters'),
                'void_votes' => $request->input('void_votes'),
                'election_result' => $request->input('election_result'),
            ]);
        }

        // Log the activity
        if (Auth::check()) {
            UserActivity::create([
                'user_id' => Auth::id(),
                'activity_type' => 'Data Input',
                'activity_description' => 'Polling Unit data added',
            ]);
        } else {
            // Handle the case where the user is not authenticated
            // You might log this or handle it in another way
        }

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Polling Unit data has been saved successfully.');
    }

    public function show()
    {
        // Example of fetching and displaying data
        $pollingUnitData = PollingUnitData::latest()->first();
        return view('console.datainput', compact('pollingUnitData'));
    }
}
