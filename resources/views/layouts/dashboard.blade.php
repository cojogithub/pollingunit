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
                <div class="block">
                    <canvas id="registeredVotersChart"></canvas>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="block">
                    <canvas id="accreditedVotersChart"></canvas>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="block">
                    <canvas id="electionResultsChart"></canvas>
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
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const registeredVotersData = {
            2018: 500000,
            2019: 600000,
            2020: 650000,
            2021: 700000,
            2022: 750000
        };

        const accreditedVotersData = {
            2018: 450000,
            2019: 550000,
            2020: 580000,
            2021: 620000,
            2022: 680000
        };

        const electionResultsData = {
            'APC': {
                2018: 240000,
                2019: 290000,
                2020: 310000,
                2021: 340000,
                2022: 370000
            },
            'PDP': {
                2018: 210000,
                2019: 250000,
                2020: 270000,
                2021: 290000,
                2022: 310000
            }
        };

        // Registered Voters Chart
        const registeredVotersCtx = document.getElementById('registeredVotersChart').getContext('2d');
        new Chart(registeredVotersCtx, {
            type: 'line',
            data: {
                labels: Object.keys(registeredVotersData),
                datasets: [{
                    label: 'Registered Voters',
                    data: Object.values(registeredVotersData),
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1,
                    fill: false
                }]
            },
            options: {
                responsive: true,
                title: {
                    display: true,
                    text: 'Yearly Registered Voters'
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Accredited Voters Chart
        const accreditedVotersCtx = document.getElementById('accreditedVotersChart').getContext('2d');
        new Chart(accreditedVotersCtx, {
            type: 'line',
            data: {
                labels: Object.keys(accreditedVotersData),
                datasets: [{
                    label: 'Accredited Voters',
                    data: Object.values(accreditedVotersData),
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1,
                    fill: false
                }]
            },
            options: {
                responsive: true,
                title: {
                    display: true,
                    text: 'Yearly Accredited Voters'
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Election Results Chart
        const electionResultsCtx = document.getElementById('electionResultsChart').getContext('2d');
        new Chart(electionResultsCtx, {
            type: 'bar',
            data: {
                labels: Object.keys(electionResultsData['APC']),
                datasets: [
                    {
                        label: 'APC',
                        data: Object.values(electionResultsData['APC']),
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'PDP',
                        data: Object.values(electionResultsData['PDP']),
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    }
                ]
            },
            options: {
                responsive: true,
                title: {
                    display: true,
                    text: 'Yearly Election Results'
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    });
</script>
@endsection
