@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Your Friends</h3>
    <ul>
        @foreach($friends as $friend)
        <li>{{ $friend->name }}</li>
        @endforeach
    </ul>
</div>
@endsection
