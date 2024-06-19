<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\State;
use App\Models\SenatorialDistrict;
use App\Models\FederalConstituency;
use App\Models\LGA;
use App\Models\Ward;
use App\Models\PollingUnit;
use App\Models\FormSubmission; // Ensure this is imported

class FormController extends Controller
{
    public function showForm()
    {
        $states = State::pluck('name', 'id'); // Fetch states with id as key and name as value
        return view('form', compact('states')); // Pass states to the view
    }

    public function submitForm(Request $request)
    {
        // Validate and save the data
        $validatedData = $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'idnumber' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'dob' => 'required|date',
            'email' => 'required|string|email|max:255',
            'gender' => 'required|string',
            'address' => 'required|string|max:255',
            'state' => 'required|exists:states,id',
            'senatorial_district' => 'required|exists:senatorial_districts,id',
            'federal_constituency' => 'required|exists:federal_constituencies,id',
            'lga' => 'required|exists:lgas,id',
            'ward' => 'required|exists:wards,id',
            'polling_unit' => 'required|exists:polling_units,id',
            'confirmation' => 'required|string',
        ]);

        $formSubmission = new FormSubmission($validatedData);
        $formSubmission->user_id = auth()->id(); // Associate with the logged-in user
        $formSubmission->save();

        return redirect()->route('form.show')->with('success', 'Form submitted successfully!');
    }

    public function getSenatorialDistricts($state_id)
    {
        $senatorialDistricts = SenatorialDistrict::where('state_id', $state_id)->pluck('name', 'id');
        return response()->json($senatorialDistricts);
    }

    public function getFederalConstituencies($senatorial_district_id)
    {
        $federalConstituencies = FederalConstituency::where('senatorial_district_id', $senatorial_district_id)->pluck('name', 'id');
        return response()->json($federalConstituencies);
    }

    public function getLgas($federal_constituency_id)
    {
        $lgas = LGA::where('federal_constituency_id', $federal_constituency_id)->pluck('name', 'id');
        return response()->json($lgas);
    }

    public function getWards($lga_id)
    {
        $wards = Ward::where('lga_id', $lga_id)->pluck('name', 'id');
        return response()->json($wards);
    }

    public function getPollingUnits($wardId)
    {
        $pollingUnits = PollingUnit::where('ward_id', $wardId)->pluck('name', 'id');
        return response()->json($pollingUnits);
    }
}
