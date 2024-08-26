@extends('layouts.dashboard')

@section('styles')
<link href="{{ asset('admin/css/social.css') }}" rel="stylesheet">
<style>
    .post-image {
        max-width: 100%;
        height: auto;
        max-height: 400px;
    }
</style>
@endsection

@section('content')
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <div class="brand-container">
                <img src="{{ asset('admin/img/slider-icon.png') }}" alt="Brand Icon" class="brand-icon">
                <span class="brand-title">Political <span style="color:red">CONNECTION</span></span>
            </div>
        </div>
    </div>
</nav>

<div class="container" style="padding-top: 70px;">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">{{ $poll->title }} - Vote Counts</h3>
                </div>
                <div class="panel-body">
                    <h4>Total Votes: {{ $totalVotes }}</h4>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Option</th>
                                <th>Votes</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($votes as $vote)
                                <tr>
                                    <td>{{ $vote->option }}</td>
                                    <td>{{ $vote->vote_count }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="panel panel-default connections">
                <div class="panel-heading">
                    <h3 class="panel-title">My Connections</h3>
                </div>
                <div class="panel-body">
                    <ul>
                        @foreach (range(1, 12) as $k)
                            @if (Auth::check())
                                <li><a class="thumbnail" href="{{ route('profile.show', ['id' => Auth::user()->id]) }}"><img src="{{ asset('admin/img/avatar.png') }}" alt="Avatar"></a></li>
                            @else
                                <li><a class="thumbnail" href="#"><img src="{{ asset('admin/img/avatar.png') }}" alt="Avatar"></a></li>
                            @endif
                        @endforeach
                    </ul>
                    <div class="clearfix"></div>
                    <a class="btn btn-primary" href="#">View all Connections</a>
                </div>
            </div>

            <div class="panel panel-default groups">
                <div class="panel-heading">
                    <h3 class="panel-title">Latest Groups</h3>
                </div>
                <div class="panel-body">
                    @foreach (range(1, 5) as $l)
                        <div class="list-group-item">
                            <img src="{{ asset('admin/img/group.png') }}">
                            <h4><a href="#">Group {{ $l }}</a></h4>
                            <p>This is a Sample Group about Lorem ipsum dolor sit amet consectetur</p>
                        </div>
                        <div class="clearfix"></div>
                    @endforeach
                    <a class="btn btn-primary" href="#">View All Groups</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
