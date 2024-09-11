<?php

namespace App\Http\Controllers;

use App\Models\PollingUnitData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PollingUnitController extends Controller
{
    public function store(Request $request)
    {
        // Validate incoming request data
        $validatedData = $request->validate([
            'id' => 'nullable|integer|exists:polling_unit_data,id',
            'registered_voters' => 'nullable|integer',
            'accredited_voters' => 'nullable|integer',
            'void_votes' => 'nullable|integer',
            'election_result' => 'nullable|string',
        ]);

        // Log the validated data for debugging
        Log::info('Validated data:', $validatedData);

        // Check if an id is provided and find the existing record
        if (isset($validatedData['id'])) {
            $pollingUnit = PollingUnitData::find($validatedData['id']);

            if ($pollingUnit) {
                // Update only the fields provided in the request
                $pollingUnit->update(array_filter($validatedData));
                Log::info('Polling unit updated:', $pollingUnit->toArray());
            } else {
                return redirect()->back()->with('error', 'Polling Unit not found.');
            }
        } else {
            // Create a new record if no id is provided
            $newPollingUnit = PollingUnitData::create(array_filter($validatedData));
            Log::info('New polling unit created:', $newPollingUnit->toArray());
        }

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Data has been saved.');
    }
}
