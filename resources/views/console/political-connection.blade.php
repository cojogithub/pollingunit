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
                    <h3 class="panel-title">Public Wall</h3>
                </div>
                <div class="panel-body">
                    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <textarea class="form-control" name="content" placeholder="Write on the wall" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                        <div class="pull-right"> Attach:
                            <div class="btn-group">
                                <input type="file" name="image" class="btn btn-default">
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            @foreach ($posts as $post)
            <div class="panel panel-default post">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-2">
                            <a class="post-avatar thumbnail" href="{{ route('profile.show', ['id' => $post->user->id]) }}">
                                <img src="{{ asset($post->user->profile_image ? 'storage/' . $post->user->profile_image : 'admin/img/avatar.png') }}" alt="Avatar">
                                <div class="text-center">{{ $post->user->firstname }}</div>
                            </a>
                            <div class="likes text-center"> 7 Likes</div>
                        </div>
                        <div class="col-sm-10">
                            <div class="bubble">
                                <div class="pointer">
                                    @if ($post->image_path)
                                    <img src="{{ asset('storage/' . $post->image_path) }}" alt="Post Image" class="img-fluid post-image">
                                    @endif
                                    <p>{{ $post->content }}</p>
                                </div>
                                <div class="pointer-border"></div>
                            </div>
                            <p class="post-actions"><a href="#">Like</a> • <a href="#">Follow</a> • <a href="#">Share</a></p>
                            <div class="comment-form">
                                <form action="{{ route('comments.store', $post->id) }}" method="POST" class="form-inline">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" name="content" class="form-control" placeholder="Enter Comment">
                                    </div>
                                    <button type="submit" class="btn btn-default">Add</button>
                                </form>
                            </div>
                            <div class="comments">
                                @foreach ($post->comments as $comment)
                                <div class="comment">
                                    <a class="comment-avatar pull-left" href="#"><img src="{{ asset($comment->user->profile_image ? 'storage/' . $comment->user->profile_image : 'admin/img/avatar.png') }}" alt="Avatar"></a>
                                    <div class="comment-text">
                                        <p>{{ $comment->content }}</p>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="comment-form">
                                        <form class="form-inline" action="{{ route('comments.store', $post->id) }}" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="content" placeholder="Enter Comment">
                                            </div>
                                            <button type="submit" class="btn btn-default">Add</button>
                                        </form>
                                    </div>
                                    @foreach ($comment->comments as $nestedComment)
                                    <div class="comment">
                                        <a class="comment-avatar pull-left" href="#"><img src="{{ asset($nestedComment->user->profile_image ? 'storage/' . $nestedComment->user->profile_image : 'admin/img/avatar.png') }}" alt="Avatar"></a>
                                        <div class="comment-text">
                                            <p>{{ $nestedComment->content }}</p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    @endforeach
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            <!-- Display polls -->
            @if(isset($polls) && count($polls) > 0)
                @foreach ($polls as $poll)
                <div class="panel panel-default post">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-2">
                                <a class="post-avatar thumbnail" href="#">
                                    <img src="{{ asset('admin/img/avatar.png') }}" alt="Avatar">
                                    <div class="text-center">{{ $poll->title }}</div>
                                </a>
                            </div>
                            <div class="col-sm-10">
                                <div class="bubble">
                                    <div class="pointer">
                                        <p><strong>{{ $poll->question }}</strong></p>
                                        <form action="{{ route('poll.vote', $poll->id) }}" method="POST">
                                            @csrf
                                            @foreach ($poll->options as $option)
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="option" id="option{{ $option->id }}" value="{{ $option->id }}">
                                                <label class="form-check-label" for="option{{ $option->id }}">
                                                    {{ $option->option }}
                                                </label>
                                            </div>
                                            @endforeach
                                            <button type="submit" class="btn btn-primary mt-2">Vote</button>
                                        </form>
                                    </div>
                                    <div class="pointer-border"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            @endif
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
