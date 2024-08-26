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
                    <h3 class="panel-title">Manage Polls</h3>
                </div>
                <div class="panel-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Question</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($polls as $poll)
                                <tr>
                                    <td>{{ $poll->title }}</td>
                                    <td>{{ $poll->question }}</td>
                                    <td>{{ $poll->created_at }}</td>
                                    <td>
                                        <a href="{{ route('poll.view', ['fileName' => now()->format('d-m-Y') . '-' . preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $poll->title)) . '.html']) }}" target="_blank" class="btn btn-secondary">View</a>
                                        <a href="{{ route('poll.votes', ['id' => $poll->id]) }}" class="btn btn-primary">Votes</a>
                                    </td>
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

@section('scripts')
<script src="{{ asset('admin/js/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
@endsection
