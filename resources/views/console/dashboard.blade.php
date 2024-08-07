@extends('layouts.app')

@section('content')
<div class="page-header">
    <div class="container-fluid">
        <h2 class="h5 no-margin-bottom">Dashboard</h2>
    </div>
</div>
<section class="no-padding-top no-padding-bottom">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                    <div class="progress-details d-flex align-items-end justify-content-between">
                        <div class="title">
                            <div class="icon"><i class="icon-user-1"></i></div><strong>My Connections</strong>
                        </div>
                        <div class="number dashtext-1">27</div>
                    </div>
                    <div class="progress progress-template">
                        <div role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-1"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                    <div class="progress-details d-flex align-items-end justify-content-between">
                        <div class="title">
                            <div class="icon"><i class="icon-contract"></i></div><strong>Registered Voters</strong>
                        </div>
                        <div class="number dashtext-2">{{ $latestData->registered_voters ?? 'N/A' }}</div>
                    </div>
                    <div class="progress progress-template">
                        <div role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-2"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                    <div class="progress-details d-flex align-items-end justify-content-between">
                        <div class="title">
                            <div class="icon"><i class="icon-paper-and-pencil"></i></div><strong>Contacts Made</strong>
                        </div>
                        <div class="number dashtext-3">140</div>
                    </div>
                    <div class="progress progress-template">
                        <div role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-3"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                    <div class="progress-details d-flex align-items-end justify-content-between">
                        <div class="title">
                            <div class="icon"><i class="icon-writing-whiteboard"></i></div><strong>Prospects</strong>
                        </div>
                        <div class="number dashtext-4">41</div>
                    </div>
                    <div class="progress progress-template">
                        <div role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-4"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="no-padding-bottom">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="statistic-block block">
                    <div class="progress-details d-flex align-items-center justify-content-between">
                        <div class="title">
                            <div class="icon"><i class="icon-paper-and-pencil"></i></div><strong>Accredited Voters</strong>
                        </div>
                        <div class="number dashtext-3">{{ $latestData->accredited_voters ?? 'N/A' }}</div>
                    </div>
                    <div class="progress progress-template">
                        <div role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-3"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="statistic-block block">
                    <div class="progress-details d-flex align-items-center justify-content-between">
                        <div class="title">
                            <div class="icon"><i class="icon-chart"></i></div><strong>Election Result</strong>
                        </div>
                        <div class="number dashtext-4">{{ $latestData->election_result ?? 'N/A' }}</div>
                    </div>
                    <div class="progress progress-template">
                        <div role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-4"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="no-padding-bottom">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="bar-chart block no-margin-bottom">
                    <canvas id="barChartExample01" class="custom-chart-canvas"></canvas>
                    <p>Registered voters in major states across multiple election years. <br><strong>Colors:</strong> Lagos (Blue), Kano (Red), Rivers (Green), Oyo (Purple), Kaduna (Yellow). (Source: INEC)</p>
                </div>
                <div class="bar-chart block">
                    <canvas id="barChartExample02" class="custom-chart-canvas"></canvas>
                    <p>Votes received by different parties in presidential elections over the years. <br><strong>Colors:</strong> APC (Blue), PDP (Red), APGA (Green), NDC (Purple). (Source: INEC)</p>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="line-chart block">
                    <canvas id="lineChart" class="custom-chart-canvas"></canvas>
                    <p>Voter turnout percentages over the years. <br><strong>Color:</strong> Voter Turnout (Cyan). (Source: INEC)</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="no-padding-bottom">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="stats-with-chart-2 block same-height">
                    <div class="title"><strong class="d-block">Election Incidents</strong><span class="d-block">Yearly Overview</span></div>
                    <div class="piechart chart">
                        <canvas id="pieChartHome01" class="custom-chart-canvas"></canvas>
                        <div class="text"><strong class="d-block">2023</strong><span class="d-block">Incidents</span></div>
                    </div>
                    <p>Distribution of different types of election incidents in 2023. <br><strong>Colors:</strong> Violence (Red), Irregularities (Blue), Ballot Snatching (Yellow). (Source: INEC)</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="stats-with-chart-2 block same-height">
                    <div class="title"><strong class="d-block">Party Performance</strong><span class="d-block">2023 Elections</span></div>
                    <div class="piechart chart">
                        <canvas id="pieChartHome02" class="custom-chart-canvas"></canvas>
                        <div class="text"><strong class="d-block">50%</strong><span class="d-block">Seats</span></div>
                    </div>
                    <p>Performance of different parties in terms of seats won in the 2023 elections. <br><strong>Colors:</strong> APC (Blue), PDP (Red), APGA (Green), NDC (Purple). (Source: INEC)</p>
                </div>
            </div>
            <div class="col-lg-4" id="voter-registration-section">
                <div class="stats-with-chart-2 block same-height">
                    <div class="title"><strong class="d-block">Voter Registration</strong><span class="d-block">2011-2023</span></div>
                    <div class="linechart chart">
                        <canvas id="lineChartHome03" class="custom-chart-canvas"></canvas>
                    </div>
                    <p>Actual and factual Nigerian voter registration over the years. <br><strong>Color:</strong> Voter Registration (Green). (Source: INEC)</p>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="footer">
    <div class="footer__block block no-margin-bottom">
        <div class="container-fluid text-center">
            <p class="no-margin-bottom">2018 &copy; Your company. Download From <a target="_blank" href="https://templateshub.net">Templates Hub</a>.</p>
        </div>
    </div>
</footer>
@endsection

@section('scripts')
<script>
document.addEventListener("DOMContentLoaded", function() {
    const createChart = (ctx, type, data, options) => new Chart(ctx, { type, data, options });

    const commonOptions = {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    };

    const barChartExample01 = document.getElementById('barChartExample01').getContext('2d');
    createChart(barChartExample01, 'bar', {
        labels: ['2011', '2015', '2019', '2023'],
        datasets: [
            {
                label: 'Lagos',
                data: [5500000, 5800000, 6000000, 6200000],
                backgroundColor: 'rgba(54, 162, 235, 0.4)', // Blue
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            },
            {
                label: 'Kano',
                data: [5000000, 5300000, 5500000, 5800000],
                backgroundColor: 'rgba(255, 99, 132, 0.4)', // Red
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1
            },
            {
                label: 'Rivers',
                data: [3000000, 3200000, 3500000, 3700000],
                backgroundColor: 'rgba(75, 192, 192, 0.4)', // Green
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            },
            {
                label: 'Oyo',
                data: [2800000, 3000000, 3200000, 3400000],
                backgroundColor: 'rgba(153, 102, 255, 0.4)', // Purple
                borderColor: 'rgba(153, 102, 255, 1)',
                borderWidth: 1
            },
            {
                label: 'Kaduna',
                data: [2700000, 2900000, 3000000, 3200000],
                backgroundColor: 'rgba(255, 206, 86, 0.4)', // Yellow
                borderColor: 'rgba(255, 206, 86, 1)',
                borderWidth: 1
            }
        ]
    }, commonOptions);

    const barChartExample02 = document.getElementById('barChartExample02').getContext('2d');
    createChart(barChartExample02, 'bar', {
        labels: ['2011', '2015', '2019', '2023'],
        datasets: [
            {
                label: 'APC',
                data: [12000000, 13500000, 15000000, 16000000],
                backgroundColor: 'rgba(54, 162, 235, 0.4)', // Blue
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            },
            {
                label: 'PDP',
                data: [10000000, 9000000, 11000000, 13000000],
                backgroundColor: 'rgba(255, 99, 132, 0.4)', // Red
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1
            },
            {
                label: 'APGA',
                data: [2000000, 2500000, 3000000, 3500000],
                backgroundColor: 'rgba(75, 192, 192, 0.4)', // Green
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            },
            {
                label: 'NDC',
                data: [1500000, 2000000, 2500000, 3000000],
                backgroundColor: 'rgba(153, 102, 255, 0.4)', // Purple
                borderColor: 'rgba(153, 102, 255, 1)',
                borderWidth: 1
            }
        ]
    }, commonOptions);

    const lineChart = document.getElementById('lineChart').getContext('2d');
    createChart(lineChart, 'line', {
        labels: ['2011', '2015', '2019', '2023'],
        datasets: [
            {
                label: 'Voter Turnout (%)',
                data: [53.7, 43.6, 34.8, 38.0],
                backgroundColor: 'rgba(75, 192, 192, 0.4)', // Cyan
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1,
                fill: true
            }
        ]
    }, commonOptions);

    const lineChartHome03 = document.getElementById('lineChartHome03').getContext('2d');
    createChart(lineChartHome03, 'line', {
        labels: ['2011', '2015', '2019', '2023'],
        datasets: [
            {
                label: 'Voter Registration',
                data: [70000000, 80000000, 90000000, 100000000],
                backgroundColor: 'rgba(75, 192, 192, 0.4)', // Green
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1,
                fill: true
            }
        ]
    }, commonOptions);

    const pieChartOptions = {
        responsive: true,
        maintainAspectRatio: false
    };

    const pieChartHome01 = document.getElementById('pieChartHome01').getContext('2d');
    createChart(pieChartHome01, 'pie', {
        labels: ['Violence', 'Irregularities', 'Ballot Snatching'],
        datasets: [{
            data: [45, 35, 20],
            backgroundColor: [
                'rgba(255, 99, 132, 0.4)', // Red
                'rgba(54, 162, 235, 0.4)', // Blue
                'rgba(255, 206, 86, 0.4)' // Yellow
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)'
            ],
            borderWidth: 1
        }]
    }, pieChartOptions);

    const pieChartHome02 = document.getElementById('pieChartHome02').getContext('2d');
    createChart(pieChartHome02, 'pie', {
        labels: ['APC', 'PDP', 'APGA', 'NDC'],
        datasets: [{
            data: [50, 30, 15, 5],
            backgroundColor: [
                'rgba(54, 162, 235, 0.4)', // Blue
                'rgba(255, 99, 132, 0.4)', // Red
                'rgba(75, 192, 192, 0.4)', // Green
                'rgba(153, 102, 255, 0.4)' // Purple
            ],
            borderColor: [
                'rgba(54, 162, 235, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)'
            ],
            borderWidth: 1
        }]
    }, pieChartOptions);
});
</script>
@endsection

@section('styles')
<style>
    #voter-registration-section {
        position: relative;
        top: -3rem;
        height: 25rem; /* Set a fixed height for consistency */
    }

    .same-height {
        height: 25rem; /* Set the same fixed height for consistency */
    }

    @media (max-width: 1200px) {
        #voter-registration-section, .same-height {
            top: -2rem;
            height: 22rem; /* Adjust height for smaller screens */
        }
    }

    @media (max-width: 768px) {
        #voter-registration-section, .same-height {
            top: -1rem;
            height: 20rem; /* Adjust height for smaller screens */
        }
    }

    @media (max-width: 576px) {
        #voter-registration-section, .same-height {
            top: -0.5rem;
            height: 18rem; /* Adjust height for smaller screens */
        }
    }
</style>
@endsection
