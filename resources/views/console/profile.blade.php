@extends('layouts.dashboard')

@section('styles')
<link href="{{ asset('admin/css/social.css') }}" rel="stylesheet">
@endsection

@section('content')
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('admin/img/slider-icon.png') }}" alt="Brand Icon" class="brand-icon">
                <span class="brand-title">Political<span style="color:red">CONNECTION</span></span>
            </a>
        </div>
    </div>
</nav>

<div class="container" style="padding-top: 70px;">
    <div class="row">
        <div class="col-md-8 profile">
            <div id="profile-image">
                <img src="{{ asset($user->profile_image ? 'storage/' . $user->profile_image : 'admin/img/avatar.png') }}" alt="Profile Image" class="img-thumbnail">
                <div class="text-center" style="color: #fff">
                    <h3>{{ $user->firstname }} {{ $user->lastname }}</h3>
                </div>
            </div>
            <div id="user-info" class="well">
                <li><strong>Email Address:</strong><p>{{ $user->email }}</p></li>
                <li><strong>Phone Number:</strong><p>{{ $user->phone }}</p></li>
                <li><strong>Job Position:</strong><p>{{ $user->jobposition }}</p></li>
                <li><strong>Company Name:</strong><p>{{ $user->company }}</p></li>
            </div>
            <div id="profile-info" class="well">
                <ul>
                    <li><strong>Joined:</strong> {{ $user->created_at->format('F d, Y') }}</li>
                    <li><strong>Date of Birth:</strong> {{ $user->dob ? $user->dob->format('F d, Y') : 'N/A' }}</li>
                    <li><strong>Location:</strong> {{ is_object($user->lga) ? $user->lga->name : 'N/A' }}</li>
                    <li><strong>Twitter:</strong> <a href="https://twitter.com/{{ $user->twitter }}">{{ $user->twitter }}</a></li>
                    <li><strong>Facebook:</strong> <a href="https://facebook.com/{{ $user->facebook }}">{{ $user->facebook }}</a></li>
                    <li><strong>Google+:</strong> <a href="https://plus.google.com/{{ $user->google_plus }}">{{ $user->google_plus }}</a></li>
                    <li><strong>LinkedIn:</strong> <a href="https://linkedin.com/in/{{ $user->linkedin }}">{{ $user->linkedin }}</a></li>
                    <li><strong>Instagram:</strong> <a href="https://instagram.com/{{ $user->instagram }}">{{ $user->instagram }}</a></li>
                    <li><strong>YouTube:</strong> <a href="https://youtube.com/{{ $user->youtube }}">{{ $user->youtube }}</a></li>
                </ul>
            </div>
            <div id="user-bio" class="well">
                <h4>Bio</h4>
                <p>{{ $user->bio }}</p>
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
                        <li><a class="thumbnail" href="{{ route('profile.show', ['id' => Auth::user()->id]) }}"><img src="{{ asset('admin/img/avatar.png') }}" alt="Avatar"></a></li>
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

@section('scripts')
<script src="{{ asset('admin/js/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
@endsection
