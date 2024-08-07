@extends('layouts.dashboard')

@section('styles')
<!-- Include the styles specific to the profile.blade.php -->
<link href="{{ asset('admin/css/social.css') }}" rel="stylesheet">
<style>
    #profile-image {
        margin-right: 20px;
    }
</style>
@endsection

@section('content')
<!-- Red Nav Menu Specific to the Profile Page -->
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('admin/img/slider-icon.png') }}" alt="Brand Icon" class="brand-icon">
                <span class="brand-title">Political<span style="color:red">CONNECTION</span></span>
            </a>
        </div>

        <div id="navbar" class="navbar">
            <ul class="nav navbar">
                <li><a href="{{ route('political.connection') }}">Wall</a></span></li> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <li><a href="{{ route('profile.show', ['id' => Auth::user()->id]) }}">Profile</a></li> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <li><span style="color:red"><a href="{{ route('photos') }}">Photos</a></li> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <li><a href="{{ route('connections') }}">Connections</a></li> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <li><a href="{{ route('groups') }}">Groups</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container" style="padding-top: 70px;">
    <div class="row">
        <div class="col-md-8 profile">
            <div class="row">

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
<!-- Include the necessary scripts for the profile.blade.php -->
<script src="{{ asset('admin/js/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
@endsection
