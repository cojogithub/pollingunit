@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h1>Recent Posts</h1>
            @foreach($posts as $post)
                <div class="card mb-4" style="background-color: transparent; color: white;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->user->name }}</h5>
                        <p class="card-text">{{ $post->content }}</p>
                        <small>Posted on {{ $post->created_at->format('M d, Y') }}</small>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

@section('styles')
<link rel="stylesheet" href="{{ asset('admin/css/custom.css') }}">
@endsection
