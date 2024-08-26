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
    </div>
</nav>
<br><br>
<div class="container">
    <div class="row">
        <div class="col-md-8 groups">
            <h1 class="page-header">Groups</h1>
            @foreach (range(1, 7) as $i)
            <div class="group-item">
                <img src="/img/group.png">
                <h4><a href="#">Sample Group {{ $i }}</a></h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit alias quas sit suscipit cupiditate corrupti voluptas omnis non tempore molestias quaerat architecto, eveniet dolorem dolor vel fugit consectetur commodi nemo.</p>
                <p><a href="#" class="btn btn-default">Join Group</a></p>
            </div>
            <div class="clearfix"></div>
            @endforeach
        </div>
        <div class="col-md-4">
            <div class="panel panel-default connections">
                <div class="panel-heading">
                    <h3 class="panel-title">My Connections</h3>
                </div>
                <div class="panel-body">
                    <ul>
                        @foreach (range(1, 12) as $i)
                        <li><a class="thumbnail" href="profile.html"><img src="/img/avatar.png" alt="Avatar"></a></li>
                        @endforeach
                    </ul>
                    <a class="btn-primary" href="#">View all Connections</a>
                </div>
            </div>
            <div class="panel panel-default groups">
                <div class="panel-heading">
                    <h3 class="panel-title">Latest Groups</h3>
                </div>
                <div class="panel-body">
                    @foreach (range(1, 5) as $i)
                    <div class="list-group-item">
                        <img src="/img/group.png">
                        <h4><a href="#">Group {{ $i }}</a></h4>
                        <p>This is a Sample Group about Lorem ipsum dolor sit amet consectetur</p>
                    </div>
                    <div class="clearfix"></div>
                    @endforeach
                    <a class="btn-primary" href="#">View all Groups</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
