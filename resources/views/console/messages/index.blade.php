@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h2>Your Messages</h2>
            @foreach($messages as $message)
                <div class="message">
                    <p>{{ $message->content }}</p>
                    <small>Received on {{ $message->created_at->format('d M Y') }}</small>
                </div>
                <hr>
            @endforeach
            {{ $messages->links() }}
        </div>
    </div>
</div>
@endsection
