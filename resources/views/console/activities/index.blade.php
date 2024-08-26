@extends('layouts.dashboard')

@section('styles')
<link href="{{ asset('admin/css/social.css') }}" rel="stylesheet">
<style>
    .activity-box {
        background: rgb(255, 255, 255);
        border-radius: 10px;
        padding: 2rem;
        margin-bottom: 20px;
        width: 75%; /* Same width as profile boxes */
        margin-left: auto;
        margin-right: auto;
    }
    .text-center {
        text-align: center;
    }
</style>
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
            <h2>User Activity</h2>
            @foreach($activities as $activity)
                <div class="activity-box">
                    <p><strong>{{ $activity->user->firstname }} {{ $activity->user->lastname }}</strong></p>
                    <p>{{ $activity->activity_description }}</p>
                    <small>{{ $activity->created_at->format('F d, Y h:i A') }}</small>
                </div>
            @endforeach

            {{ $activities->links() }} <!-- Pagination -->
        </div>
        <div class="col-md-4">
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('admin/js/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
@endsection
