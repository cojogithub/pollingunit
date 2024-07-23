@extends('layouts.dashboard')

@section('styles')
<!-- Include the styles specific to the political-connection.blade.php -->
<link href="{{ asset('admin/css/social.css') }}" rel="stylesheet">
@endsection

@section('content')
<!-- Red Nav Menu Specific to the Wall Page -->
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
                <li><span style="color:red"><a href="{{ route('political.connection') }}">Wall</a></span></li> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <li><a href="{{ route('profile.show', ['id' => Auth::user()->id]) }}">Profile</a></li> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <li><a href="{{ route('photos') }}">Photos</a></li> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <li><a href="{{ route('connections') }}">Connections</a></li> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <li><a href="{{ route('groups') }}">Groups</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container" style="padding-top: 70px;">
    <div class="row">
        <!-- Post on WALL section -->
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Public Wall</h3>
                </div>
                <div class="panel-body">
                    <form>
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Write on the wall"></textarea>
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                        <div class="pull-right"> Attach:
                            <div class="btn-group">
                                <button type="button" class="btn btn-default"><i class="fa fa-picture-o" aria-hidden="true"></i> Image</button>
                                <button type="button" class="btn btn-default"><i class="fa fa-video-camera" aria-hidden="true"></i> Video</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Add your post sections here, similar to the example -->
            @foreach (range(1, 3) as $i)
            <div class="panel panel-default post">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-2">
                            <a class="post-avatar thumbnail" href="{{ route('profile.show', ['id' => Auth::user()->id]) }}">
                                <img src="{{ asset('admin/img/avatar.png') }}" alt="Avatar">
                                <div class="text-center">User</div>
                            </a>
                            <div class="likes text-center"> 7 Likes</div>
                        </div>
                        <div class="col-sm-10">
                            <div class="bubble">
                                <div class="pointer">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                </div>
                                <div class="pointer-border"></div>
                            </div>
                            <p class="post-actions"><a href="#">Like</a> • <a href="#">Follow</a> • <a href="#">Share</a></p>
                            <div class="comment-form">
                                <form class="form-inline">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="exampleInputName2" placeholder="Enter Comment">
                                    </div>
                                    <button type="submit" class="btn btn-default">Add</button>
                                </form>
                            </div>
                            <div class="comments">
                                @foreach (range(1, 2) as $j)
                                <div class="comment">
                                    <a class="comment-avatar pull-left" href="#"><img src="{{ asset('admin/img/avatar.png') }}" alt="Avatar"></a>
                                    <div class="comment-text">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!--col-md-8 end-->

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
        <!--col-md-4 end-->
    </div>
    <!--row end-->
</div>
<!--container end-->

@endsection

@section('scripts')
<!-- Include the necessary scripts for the wall.blade.php -->
<script src="{{ asset('admin/js/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
@endsection
