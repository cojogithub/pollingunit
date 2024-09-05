@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h1>{{ $group->name }}</h1>
            <p>{{ $group->description }}</p>
            <h2>Members</h2>
            <ul class="list-unstyled">
                @foreach($group->users as $user)
                    <li>
                        <a href="{{ route('profile.show', $user->id) }}">{{ $user->name }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
