@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h2>Your Messages</h2>
            @if($messages->count() > 0)
                @foreach($messages as $message)
                    <div class="message">
                        <p><strong>From:</strong> {{ $message->sender->firstname }} {{ $message->sender->lastname }}</p>
                        <p>{{ $message->content }}</p>
                        <small>Received on {{ $message->created_at->format('d M Y h:i A') }}</small>
                    </div>
                    <hr>
                @endforeach
                {{ $messages->links() }} <!-- Pagination links -->
            @else
                <p>You have no messages.</p>
            @endif
        </div>
    </div>
</div>
@endsection
