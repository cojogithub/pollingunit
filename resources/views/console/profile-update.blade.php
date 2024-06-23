@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card" style="background-color: transparent; color: white; border: none;">
                <div class="card-header" style="border-bottom: none;">
                    <h4>Update Profile</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="profile_image">Profile Image</label>
                            <input type="file" name="profile_image" id="profile_image" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}">
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}">
                        </div>

                        <div class="form-group">
                            <label for="bio">Bio</label>
                            <textarea name="bio" id="bio" class="form-control">{{ $user->bio }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="birthday">Birthday</label>
                            <input type="date" name="birthday" id="birthday" class="form-control" value="{{ $user->birthday }}">
                        </div>

                        <div class="form-group">
                            <label for="country">Country</label>
                            <input type="text" name="country" id="country" class="form-control" value="{{ $user->country }}">
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" id="phone" class="form-control" value="{{ $user->phone }}">
                        </div>

                        <div class="form-group">
                            <label for="website">Website</label>
                            <input type="text" name="website" id="website" class="form-control" value="{{ $user->website }}">
                        </div>

                        <div class="form-group">
                            <label for="company">Company</label>
                            <input type="text" name="company" id="company" class="form-control" value="{{ $user->company }}">
                        </div>

                        <div class="form-group">
                            <label for="twitter">Twitter</label>
                            <input type="text" name="twitter" id="twitter" class="form-control" value="{{ $user->twitter }}">
                        </div>

                        <div class="form-group">
                            <label for="facebook">Facebook</label>
                            <input type="text" name="facebook" id="facebook" class="form-control" value="{{ $user->facebook }}">
                        </div>

                        <div class="form-group">
                            <label for="google_plus">Google+</label>
                            <input type="text" name="google_plus" id="google_plus" class="form-control" value="{{ $user->google_plus }}">
                        </div>

                        <div class="form-group">
                            <label for="linkedin">LinkedIn</label>
                            <input type="text" name="linkedin" id="linkedin" class="form-control" value="{{ $user->linkedin }}">
                        </div>

                        <div class="form-group">
                            <label for="instagram">Instagram</label>
                            <input type="text" name="instagram" id="instagram" class="form-control" value="{{ $user->instagram }}">
                        </div>

                        <button type="submit" class="btn btn-primary">Save changes</button>
                        <button type="reset" class="btn btn-default cancel-btn">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('styles')
<link rel="stylesheet" href="{{ asset('admin/css/custom.css') }}">
@endsection
