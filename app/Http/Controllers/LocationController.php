<?php

namespace App\Http\Controllers;

use App\Models\SenatorialDistrict;
use App\Models\FederalConstituency;
use App\Models\LGA;
use App\Models\Ward;
use App\Models\PollingUnit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LocationController extends Controller
{
    public function getSenatorialDistricts($state_id)
    {
        try {
            $senatorialDistricts = SenatorialDistrict::where('state_id', $state_id)->pluck('name', 'id');
            return response()->json($senatorialDistricts);
        } catch (\Exception $e) {
            Log::error("Error fetching Senatorial Districts: " . $e->getMessage());
            return response()->json(['error' => 'Error fetching Senatorial Districts.'], 500);
        }
    }

    public function getFederalConstituencies($senatorial_district_id)
    {
        try {
            $federalConstituencies = FederalConstituency::where('senatorial_district_id', $senatorial_district_id)->pluck('name', 'id');
            return response()->json($federalConstituencies);
        } catch (\Exception $e) {
            Log::error("Error fetching Federal Constituencies: " . $e->getMessage());
            return response()->json(['error' => 'Error fetching Federal Constituencies.'], 500);
        }
    }

    public function getLGAs($federal_constituency_id)
    {
        try {
            Log::info("Fetching LGAs for federal_constituency_id: $federal_constituency_id");
            
            $lgas = LGA::where('federal_constituency_id', $federal_constituency_id)->pluck('name', 'id');

            Log::info("LGAs found: ", $lgas->toArray());

            return response()->json($lgas);
        } catch (\Exception $e) {
            Log::error("Error fetching LGAs: " . $e->getMessage());
            return response()->json(['error' => 'Error fetching LGAs.'], 500);
        }
    }

    public function getWards($lga_id)
    {
        try {
            $wards = Ward::where('lga_id', $lga_id)->pluck('name', 'id');
            return response()->json($wards);
        } catch (\Exception $e) {
            Log::error("Error fetching Wards: " . $e->getMessage());
            return response()->json(['error' => 'Error fetching Wards.'], 500);
        }
    }

    public function getPollingUnits($ward_id)
    {
        try {
            $pollingUnits = PollingUnit::where('ward_id', $ward_id)->pluck('name', 'id');
            return response()->json($pollingUnits);
        } catch (\Exception $e) {
            Log::error("Error fetching Polling Units: " . $e->getMessage());
            return response()->json(['error' => 'Error fetching Polling Units.'], 500);
        }
    }
}

