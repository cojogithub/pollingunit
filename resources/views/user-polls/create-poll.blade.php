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
                    <h3 class="panel-title">Create Poll</h3>
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
                    <form action="{{ route('poll.store') }}" method="POST" id="pollForm">
                        @csrf
                        <div class="mb-3">
                            <label for="pollTitle" class="form-label">Poll Title</label>
                            <input type="text" class="form-control" id="pollTitle" name="title" required>
                        </div>
                        <div class="mb-3">
                            <label for="pollQuestion" class="form-label">Poll Question</label>
                            <input type="text" class="form-control" id="pollQuestion" name="question" required>
                        </div>
                        <div id="pollOptions">
                            <div class="mb-3">
                                <label for="option1" class="form-label">Option 1</label>
                                <input type="text" class="form-control" id="option1" name="options[]" required>
                            </div>
                            <div class="mb-3">
                                <label for="option2" class="form-label">Option 2</label>
                                <input type="text" class="form-control" id="option2" name="options[]" required>
                            </div>
                        </div>
                        <button type="button" class="btn btn-secondary mb-3" id="addOptionBtn">Add Option</button>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="allowMultiple" name="allow_multiple" value="1">
                            <label class="form-check-label" for="allowMultiple">
                                Allow people to choose multiple answers
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
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
<script>
    document.addEventListener('DOMContentLoaded', function () {
        let optionCount = 2;
        document.getElementById('addOptionBtn').addEventListener('click', function () {
            optionCount++;
            const newOption = document.createElement('div');
            newOption.classList.add('mb-3');
            newOption.innerHTML = `
                <label for="option${optionCount}" class="form-label">Option ${optionCount}</label>
                <input type="text" class="form-control" id="option${optionCount}" name="options[]" required>
            `;
            document.getElementById('pollOptions').appendChild(newOption);
        });
    });
</script>
@endsection
