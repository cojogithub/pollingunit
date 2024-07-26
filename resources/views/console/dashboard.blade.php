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
                <div class="stats-2-block block d-flex">
                    <div class="stats-2 d-flex">
                        <div class="stats-2-arrow low"><i class="fa fa-caret-down"></i></div>
                        <div class="stats-2-content"><strong class="d-block">{{ $latestData->accredited_voters ?? 'N/A' }}</strong><span class="d-block">Accredited Voters</span>
                            <div class="progress progress-template progress-small">
                                <div role="progressbar" style="width: 60%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template progress-bar-small dashbg-2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="stats-2 d-flex">
                        <div class="stats-2-arrow height"><i class="fa fa-caret-up"></i></div>
                        <div class="stats-2-content"><strong class="d-block">{{ $latestData->registered_voters ?? 'N/A' }}</strong><span class="d-block">Registered Voters</span>
                            <div class="progress progress-template progress-small">
                                <div role="progressbar" style="width: 35%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template progress-bar-small dashbg-3"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="stats-3-block block d-flex">
                    <div class="stats-3"><strong class="d-block">{{ $latestData->election_result ?? 'N/A' }}</strong><span class="d-block">Election Result</span>
                        <div class="progress progress-template progress-small">
                            <div role="progressbar" style="width: 35%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template progress-bar-small dashbg-1"></div>
                        </div>
                    </div>
                    <div class="stats-3 d-flex justify-content-between text-center">
                        <h2>Polling Results</h2>
                        <div class="item"><strong class="d-block strong-sm">4.124</strong><span class="d-block span-sm">APC</span>
                            <div class="line"></div><small>+246</small>
                        </div>
                        <div class="item"><strong class="d-block strong-sm">2.147</strong><span class="d-block span-sm">PDP</span>
                            <div class="line"></div><small>+416</small>
                        </div>
                    </div>
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
