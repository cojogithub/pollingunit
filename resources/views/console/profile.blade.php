@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card profile-card" style="background-color: transparent; color: white; border: none;">
                <div class="card-header profile-header">
                    <div class="profile-cover" style="background-image: url('{{ asset('admin/img/profile-cover.jpg') }}');"></div>
                    <div class="profile-avatar">
                        <img src="{{ asset($user->profile_image ?? 'admin/img/avatar-6.jpg') }}" alt="Profile Image" class="img-fluid rounded-circle" style="width: 100px; height: 100px;">
                    </div>
                    <h3 class="profile-name">{{ $user->name }}</h3>
                    <p class="profile-title">{{ $user->bio }}</p>
                </div>
                <div class="card-body">
                    <p><strong>Email:</strong> {{ $user->email }}</p>
                    <p><strong>Company:</strong> {{ $user->company }}</p>
                    <p><strong>Birthday:</strong> {{ $user->birthday }}</p>
                    <p><strong>Phone:</strong> {{ $user->phone }}</p>
                    <p><strong>Social Links:</strong></p>
                    <ul class="list-unstyled social-links">
                        @if($user->twitter)<li><a href="{{ $user->twitter }}" target="_blank" class="text-twitter"><i class="fa fa-twitter"></i> Twitter</a></li>@endif
                        @if($user->facebook)<li><a href="{{ $user->facebook }}" target="_blank" class="text-facebook"><i class="fa fa-facebook"></i> Facebook</a></li>@endif
                        @if($user->google_plus)<li><a href="{{ $user->google_plus }}" target="_blank" class="text-google"><i class="fa fa-google-plus"></i> Google+</a></li>@endif
                        @if($user->linkedin)<li><a href="{{ $user->linkedin }}" target="_blank" class="text-linkedin"><i class="fa fa-linkedin"></i> LinkedIn</a></li>@endif
                        @if($user->instagram)<li><a href="{{ $user->instagram }}" target="_blank" class="text-instagram"><i class="fa fa-instagram"></i> Instagram</a></li>@endif
                    </ul>
                    <p><strong>Connections:</strong> {{ $user->friends->count() }}</p>
                    <ul class="list-unstyled">
                        @foreach($friends as $friend)
                            <li>{{ $friend->name }}</li>
                        @endforeach
                    </ul>
                    {{ $friends->links() }}
                    <h5>Posts</h5>
                    @foreach($posts as $post)
                        <div class="post">
                            <p>{{ $post->content }}</p>
                            <small>Posted on {{ $post->created_at->format('M d, Y') }}</small>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('styles')
<link rel="stylesheet" href="{{ asset('admin/css/custom.css') }}">
@endsection
