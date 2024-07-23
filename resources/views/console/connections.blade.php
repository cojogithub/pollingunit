@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 members">
            <h1 class="page-header">Members</h1>
            @foreach (range(1, 4) as $i)
            <div class="row member-row">
                <div class="col-md-3">
                    <img src="/img/avatar.png" class="img-thumbnail">
                    <div class="text-center">User {{ $i }}</div>
                </div>
                <div class="col-md-3">
                    <button type="button" class="btn btn-success btn-block"><i class="fa fa-users"></i> Connect</button>
                </div>
                <div class="col-md-3">
                    <button type="button" class="btn btn-default btn-block"><i class="fa fa-envelope"></i> Message</button>
                </div>
                <div class="col-md-3">
                    <button type="button" class="btn btn-primary btn-block"><i class="fa fa-user"></i> View Profile</button>
                </div>
            </div>
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
