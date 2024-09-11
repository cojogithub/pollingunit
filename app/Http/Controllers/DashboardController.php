<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PollingUnitData;

class DashboardController extends Controller
{
    /**
     * Show the dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Fetch the latest data
        $latestData = PollingUnitData::orderBy('created_at', 'desc')->first();

        // Fetch the most recent non-null values for each field individually
        $registeredVoters = PollingUnitData::orderBy('created_at', 'desc')->whereNotNull('registered_voters')->value('registered_voters');
        $accreditedVoters = PollingUnitData::orderBy('created_at', 'desc')->whereNotNull('accredited_voters')->value('accredited_voters');
        $voidVotes = PollingUnitData::orderBy('created_at', 'desc')->whereNotNull('void_votes')->value('void_votes');
        $electionResults = PollingUnitData::orderBy('created_at', 'desc')->whereNotNull('election_result')->value('election_result');

        // Fallback to 'N/A' if no data exists for a field
        $registeredVoters = $registeredVoters ?? 'N/A';
        $accreditedVoters = $accreditedVoters ?? 'N/A';
        $voidVotes = $voidVotes ?? 'N/A';
        $electionResults = $electionResults ?? 'N/A';

        // Return the view with the latest data
        return view('console.dashboard', [
            'latestData' => (object) [
                'registered_voters' => $registeredVoters,
                'accredited_voters' => $accreditedVoters,
                'void_votes' => $voidVotes,
                'election_result' => $electionResults,
            ]
        ]);
    }

    /**
     * Get static data for charts and other dashboard elements.
     *
     * @return array
     */
    private function getStaticData()
    {
        return [
            'registered_voters' => [2018 => 500000, 2019 => 600000, 2020 => 650000, 2021 => 700000, 2022 => 750000],
            'accredited_voters' => [2018 => 450000, 2019 => 550000, 2020 => 580000, 2021 => 620000, 2022 => 680000],
            'election_results' => [
                'APC' => [2018 => 240000, 2019 => 290000, 2020 => 310000, 2021 => 340000, 2022 => 370000],
                'PDP' => [2018 => 210000, 2019 => 250000, 2020 => 270000, 2021 => 290000, 2022 => 310000]
            ]
        ];
    }
}
