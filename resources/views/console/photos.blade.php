@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h1 class="page-header">Photos</h1>
            <p>Photo gallery will be added here.</p>
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
