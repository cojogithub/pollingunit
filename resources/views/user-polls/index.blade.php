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
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Polls</h3>
                </div>
                <div class="panel-body">
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
                                        <a href="{{ url('polls/' . $poll->id) }}" class="btn btn-primary">View</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
