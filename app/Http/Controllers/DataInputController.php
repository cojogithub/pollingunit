<?php

namespace App\Http\Controllers;

use App\Models\PollingUnitData;
use App\Models\UserActivity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DataInputController extends Controller
{
    public function show()
    {
        // Return the data input form view
        return view('console.datainput');
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'registered_voters' => 'nullable|integer',
            'accredited_voters' => 'nullable|integer',
            'void_votes' => 'nullable|integer',
            'election_result' => 'nullable|string',
        ]);

        // Prepare the data to be updated or created
        $dataToSave = [
            'registered_voters' => $request->input('registered_voters'),
            'accredited_voters' => $request->input('accredited_voters'),
            'void_votes' => $request->input('void_votes'),
            'election_result' => $request->input('election_result'),
        ];

        // Remove keys with null values to avoid overwriting with nulls
        $dataToSave = array_filter($dataToSave, function ($value) {
            return !is_null($value);
        });

        // Get the existing data, if any
        $pollingUnitData = PollingUnitData::latest()->first();

        if ($pollingUnitData) {
            // Update the existing data with new values or keep old ones if null
            $pollingUnitData->update($dataToSave);
        } else {
            // Create a new entry if none exists
            PollingUnitData::create($dataToSave);
        }

        // Log the activity
        if (Auth::check()) {
            UserActivity::create([
                'user_id' => Auth::id(),
                'activity_type' => 'Data Input',
                'activity_description' => 'Polling Unit data added or updated',
            ]);
        }

        // Redirect to the dashboard with a success message
        return redirect()->route('dashboard')->with('success', 'Polling Unit data has been saved successfully.');
    }
}
