<?php

// app/Http/Controllers/LocationController.php
namespace App\Http\Controllers;

use App\Models\SenatorialDistrict;
use App\Models\FederalConstituency;
use App\Models\LGA;
use App\Models\Ward;
use App\Models\PollingUnit;
use Illuminate\Http\Request;

class LocationController extends Controller
{
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

    public function getLGAs($federal_constituency_id)
    {
        $lgas = LGA::where('federal_constituency_id', $federal_constituency_id)->pluck('name', 'id');
        return response()->json($lgas);
    }

    public function getWards($lga_id)
    {
        $wards = Ward::where('lga_id', $lga_id)->pluck('name', 'id');
        return response()->json($wards);
    }

    public function getPollingUnits($ward_id)
    {
        $pollingUnits = PollingUnit::where('ward_id', $ward_id)->pluck('name', 'id');
        return response()->json($pollingUnits);
    }
}
