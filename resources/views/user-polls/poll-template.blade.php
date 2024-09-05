<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $poll->title }}</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <style>
        .container { margin-top: 50px; }
        .poll-options { margin-top: 20px; }
        .header-image { width: 100%; max-height: 400px; object-fit: cover; }
    </style>
</head>
<body>
    <div class="container">
        @if ($poll->header_image)
            <img src="{{ asset('storage/' . $poll->header_image) }}" alt="Header Image" class="header-image">
        @endif

        <h1>{{ $poll->title }}</h1>
        <p>{{ $poll->question }}</p>

        <form action="{{ url('polls/' . $poll->id . '/vote') }}" method="POST">
            @csrf
            <div class="poll-options">
                @foreach($poll->options as $option)
                    <div class="form-check">
                        <input class="form-check-input" type="{{ $poll->allow_multiple ? 'checkbox' : 'radio' }}" name="options[]" value="{{ $option->id }}" id="option{{ $option->id }}">
                        <label class="form-check-label" for="option{{ $option->id }}">
                            {{ $option->option }}
                        </label>
                    </div>
                @endforeach
            </div>
            <button type="submit" class="btn btn-primary mt-3">Vote</button>
        </form>
    </div>
</body>
</html>
