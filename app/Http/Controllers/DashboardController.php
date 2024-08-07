<?php

// app/Http/Controllers/DashboardController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Show the dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $data = [
            'registered_voters' => [2018 => 500000, 2019 => 600000, 2020 => 650000, 2021 => 700000, 2022 => 750000],
            'accredited_voters' => [2018 => 450000, 2019 => 550000, 2020 => 580000, 2021 => 620000, 2022 => 680000],
            'election_results' => [
                'APC' => [2018 => 240000, 2019 => 290000, 2020 => 310000, 2021 => 340000, 2022 => 370000],
                'PDP' => [2018 => 210000, 2019 => 250000, 2020 => 270000, 2021 => 290000, 2022 => 310000]
            ]
        ];

        return view('console.dashboard', compact('data'));
    }
}
