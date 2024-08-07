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
        <div id="navbar" class="navbar">
            <ul class="nav navbar">
                <li><span style="color:red"><a href="{{ route('political.connection') }}">Wall</a></span></li>
                <li><a href="{{ route('profile.show', ['id' => Auth::user()->id]) }}">Profile</a></li>
                <li><a href="{{ route('photos') }}">Photos</a></li>
                <li><a href="{{ route('connections') }}">Connections</a></li>
                <li><a href="{{ route('groups') }}">Groups</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container" style="padding-top: 70px;">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Public Wall</h3>
                </div>
                <div class="panel-body">
                    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <textarea class="form-control" name="content" placeholder="Write on the wall"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="file" name="image" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
            </div>

            @foreach ($posts as $post)
            <div class="panel panel-default post">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-2">
                            <a class="post-avatar thumbnail" href="{{ route('profile.show', ['id' => $post->user->id]) }}">
                                <img src="{{ $post->user->profile_image ? asset('storage/' . $post->user->profile_image) : asset('admin/img/avatar.png') }}" alt="Avatar">
                                <div class="text-center">{{ $post->user->firstname }}</div>
                            </a>
                            <div class="likes text-center"> {{ $post->comments->count() }} Comments</div>
                        </div>
                        <div class="col-sm-10">
                            <div class="bubble">
                                @if ($post->image_path)
                                <img src="{{ asset('storage/' . $post->image_path) }}" alt="Post Image" class="img-responsive">
                                @endif
                                <div class="pointer">
                                    {{ $post->content }}
                                </div>
                                <div class="pointer-border"></div>
                            </div>
                            <p class="post-actions"><a href="#">Like</a> • <a href="#">Follow</a> • <a href="#">Share</a></p>
                            <div class="comment-form">
                                <form action="{{ route('comments.store', ['postId' => $post->id]) }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="content" placeholder="Enter Comment">
                                    </div>
                                    <button type="submit" class="btn btn-default">Add</button>
                                </form>
                            </div>
                            <div class="comments">
                                @foreach ($post->comments as $comment)
                                <div class="comment">
                                    <a class="comment-avatar pull-left" href="#"><img src="{{ asset('admin/img/avatar.png') }}" alt="Avatar"></a>
                                    <div class="comment-text">
                                        <p>{{ $comment->content }}</p>
                                    </div>
                                    <div class="clearfix"></div>
                                    @include('console.comments.comment', ['comment' => $comment])
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
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
