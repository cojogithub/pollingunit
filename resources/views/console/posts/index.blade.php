@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h2>Your Posts</h2>
            @foreach($posts as $post)
                <div class="post">
                    <p>{{ $post->content }}</p>
                    <small>Posted on {{ $post->created_at->format('d M Y') }}</small>
                </div>
                <hr>
            @endforeach
            {{ $posts->links() }}
        </div>
    </div>
</div>
@endsection
