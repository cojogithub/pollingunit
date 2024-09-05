<?php

namespace App\Http\Controllers;

use App\Models\PollingUnitData;
use Illuminate\Http\Request;

class PollingUnitController extends Controller
{
    public function index()
    {
        $latestData = PollingUnitData::latest()->first();
        return view('console.dashboard', compact('latestData'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'registered_voters' => 'required|integer',
            'accredited_voters' => 'required|integer',
            'void_votes' => 'required|integer',
            'election_result' => 'required|integer',
        ]);

        PollingUnitData::create($request->all());

        return redirect()->back()->with('success', 'Data has been saved.');
    }
}
