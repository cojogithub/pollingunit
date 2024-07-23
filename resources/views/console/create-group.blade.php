@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h1>Create Group</h1>
            <form action="{{ route('groups.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Group Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Create Group</button>
            </form>
        </div>
    </div>
</div>
@endsection
