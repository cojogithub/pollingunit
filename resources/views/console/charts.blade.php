@extends('layouts.app')

@section('content')
<div class="page-header">
    <div class="container-fluid">
        <h2 class="h5 no-margin-bottom">Charts</h2>
    </div>
</div>
<section class="no-padding-top no-padding-bottom">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <div class="line-chart block chart">
                    <div class="title"><strong>Line Chart Example</strong></div>
                    <canvas id="lineChartCustom1"></canvas>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="lin-chart block chart">
                    <div class="title"><strong>Line Chart Example</strong></div>
                    <div class="line-chart chart margin-bottom-sm">
                        <canvas id="lineChartCustom2"></canvas>
                    </div>
                    <div class="line-chart chart">
                        <canvas id="lineChartCustom3"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="chart block">
                    <div class="title"><strong>Bar Chart Example</strong></div>
                    <div class="bar-chart chart margin-bottom-sm">
                        <canvas id="barChartCustom1"></canvas>
                    </div>
                    <div class="bar-chart chart">
                        <canvas id="barChartCustom2"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="bar-chart block chart">
                    <div class="title"><strong>Bar Chart Example</strong></div>
                    <div class="bar-chart chart">
                        <canvas id="barChartCustom3"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="pie-chart chart block">
                    <div class="title"><strong>Pie Chart Example</strong></div>
                    <div class="pie-chart chart margin-bottom-sm">
                        <canvas id="pieChartCustom1"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="doughnut-chart chart block">
                    <div class="title"><strong>Pie Chart Example</strong></div>
                    <div class="doughnut-chart chart margin-bottom-sm">
                        <canvas id="doughnutChartCustom1"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="polar-chart chart block">
                    <div class="title"><strong>Polar Chart Example</strong></div>
                    <div class="polar-chart chart margin-bottom-sm">
                        <canvas id="polarChartCustom"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="radar-chart chart block">
                    <div class="title"><strong>Radar Chart Example</strong></div>
                    <div class="radar-chart chart margin-bottom-sm">
                        <canvas id="radarChartCustom"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var ctx1 = document.getElementById('lineChartCustom1').getContext('2d');
        new Chart(ctx1, {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June'],
                datasets: [{
                    label: 'Sales',
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    data: [10, 20, 30, 40, 50, 60]
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        var ctx2 = document.getElementById('lineChartCustom2').getContext('2d');
        new Chart(ctx2, {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June'],
                datasets: [{
                    label: 'Expenses',
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    data: [5, 15, 25, 35, 45, 55]
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        var ctx3 = document.getElementById('lineChartCustom3').getContext('2d');
        new Chart(ctx3, {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June'],
                datasets: [{
                    label: 'Profits',
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    data: [30, 20, 40, 35, 45, 55]
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        var ctx4 = document.getElementById('barChartCustom1').getContext('2d');
        new Chart(ctx4, {
            type: 'bar',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June'],
                datasets: [{
                    label: 'Sales',
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    data: [10, 20, 30, 40, 50, 60]
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        var ctx5 = document.getElementById('barChartCustom2').getContext('2d');
        new Chart(ctx5, {
            type: 'bar',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June'],
                datasets: [{
                    label: 'Expenses',
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    data: [5, 15, 25, 35, 45, 55]
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        var ctx6 = document.getElementById('barChartCustom3').getContext('2d');
        new Chart(ctx6, {
            type: 'bar',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June'],
                datasets: [{
                    label: 'Profits',
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    data: [30, 20, 40, 35, 45, 55]
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        var ctx7 = document.getElementById('pieChartCustom1').getContext('2d');
        new Chart(ctx7, {
            type: 'pie',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true
            }
        });

        var ctx8 = document.getElementById('doughnutChartCustom1').getContext('2d');
        new Chart(ctx8, {
            type: 'doughnut',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true
            }
        });

        var ctx9 = document.getElementById('polarChartCustom').getContext('2d');
        new Chart(ctx9, {
            type: 'polarArea',
            data: {
                labels: ['Red', 'Green', 'Yellow', 'Grey', 'Blue'],
                datasets: [{
                    data: [11, 16, 7, 3, 14],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(201, 203, 207, 0.2)',
                        'rgba(54, 162, 235, 0.2)'
                    ],
                    borderColor: [
                        'rgb(255, 99, 132)',
                        'rgb(75, 192, 192)',
                        'rgb(255, 206, 86)',
                        'rgb(201, 203, 207)',
                        'rgb(54, 162, 235)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    r: {
                        beginAtZero: true
                    }
                }
            }
        });

        var ctx10 = document.getElementById('radarChartCustom').getContext('2d');
        new Chart(ctx10, {
            type: 'radar',
            data: {
                labels: ['Eating', 'Drinking', 'Sleeping', 'Designing', 'Coding', 'Cycling', 'Running'],
                datasets: [{
                    label: 'First dataset',
                    data: [65, 59, 90, 81, 56, 55, 40],
                    fill: true,
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgb(255, 99, 132)',
                    pointBackgroundColor: 'rgb(255, 99, 132)',
                    pointBorderColor: '#fff',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: 'rgb(255, 99, 132)'
                }, {
                    label: 'Second dataset',
                    data: [28, 48, 40, 19, 96, 27, 100],
                    fill: true,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgb(54, 162, 235)',
                    pointBackgroundColor: 'rgb(54, 162, 235)',
                    pointBorderColor: '#fff',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: 'rgb(54, 162, 235)'
                }]
            },
            options: {
                responsive: true,
                scales: {
                    r: {
                        angleLines: {
                            display: false
                        },
                        suggestedMin: 0,
                        suggestedMax: 100
                    }
                }
            }
        });
    });
</script>
@endsection
