@extends('layouts.app')

@section('content')
<div class="container light-style flex-grow-1 container-p-y">
    <h4 class="font-weight-bold py-3 mb-4">
        Profile Settings
    </h4>
    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="card overflow-hidden" style="background-color: transparent; border: none;">
            <div class="row no-gutters row-bordered row-border-light">
                <div class="col-md-3 pt-0">
                    <div class="list-group list-group-flush account-settings-links">
                        <a class="list-group-item list-group-item-action active" data-toggle="list" href="#account-general">General Info</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-info">Update Bio</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-social-links">Social Links</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-connections">Social Connections</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-change-password">Change password</a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="account-general">
                            <div class="card-body media align-items-center" style="background-color: transparent; color: white;">
                                <img src="{{ asset($user->profile_image ?? 'admin/img/avatar-6.jpg') }}" alt="" class="d-block ui-w-80">
                                <div class="media-body ml-4">
                                    <label class="btn btn-outline-primary">
                                        Upload new photo
                                        <input type="file" class="account-settings-fileinput" name="profile_image">
                                    </label> &nbsp;
                                    <button type="button" class="btn btn-default md-btn-flat" style="color: red;">Reset</button>
                                    <div class="text-light small mt-1">Allowed JPG, GIF or PNG. Max size of 800K</div>
                                </div>
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body" style="background-color: transparent; color: white;">
                                <div class="form-group">
                                    <label class="form-label">First Name</label>
                                    <input type="text" class="form-control mb-1" value="{{ $user->firstname }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Last Name</label>
                                    @if (!$user->last_name_changed)
                                        <input type="text" class="form-control mb-1" name="lastname" value="{{ $user->lastname }}">
                                        <small class="form-text text-muted" style="color:white !important;">You can only change your last name once (Marriage or Divorce).</small>
                                    @else
                                        <input type="text" class="form-control mb-1" value="{{ $user->lastname }}" disabled>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="form-label">E-mail</label>
                                    <input type="text" class="form-control mb-1" name="email" value="{{ $user->email }}">
                                    @if (!$user->hasVerifiedEmail())
                                        <div class="alert alert-warning mt-3">
                                            Your email is not confirmed. Please check your inbox.<br>
                                            <form method="POST" action="{{ route('verification.resend') }}">
                                                @csrf
                                                <button type="submit" class="btn btn-link p-0 m-0 align-baseline">Resend confirmation</button>.
                                            </form>
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Phone</label>
                                    <input type="text" class="form-control" name="phone" value="{{ old('phone', $user->phone) }}">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-change-password">
                            <div class="card-body pb-2" style="background-color: transparent; color: white;">
                                <div class="form-group">
                                    <label class="form-label">Current password</label>
                                    <input type="password" class="form-control" name="current_password">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">New password</label>
                                    <input type="password" class="form-control" name="new_password">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Repeat new password</label>
                                    <input type="password" class="form-control" name="new_password_confirmation">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-info">
                            <div class="card-body pb-1" style="background-color: transparent; color: white;">
                                <div class="form-group">
                                    <label class="form-label">Bio</label>
                                    <textarea class="form-control" rows="5" name="bio">{{ old('bio', $user->bio) }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-social-links">
                            <div class="card-body pb-2" style="background-color: transparent; color: white;">
                                <div class="form-group">
                                    <label class="form-label">Twitter</label>
                                    <input type="text" class="form-control" name="twitter" value="{{ old('twitter', $user->twitter) }}">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Facebook</label>
                                    <input type="text" class="form-control" name="facebook" value="{{ old('facebook', $user->facebook) }}">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Google+</label>
                                    <input type="text" class="form-control" name="google_plus" value="{{ old('google_plus', $user->google_plus) }}">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">LinkedIn</label>
                                    <input type="text" class="form-control" name="linkedin" value="{{ old('linkedin', $user->linkedin) }}">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Instagram</label>
                                    <input type="text" class="form-control" name="instagram" value="{{ old('instagram', $user->instagram) }}">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">YouTube</label>
                                    <input type="text" class="form-control" name="youtube" value="{{ old('youtube', $user->youtube) }}">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-connections">
                            <div class="card-body" style="background-color: rgb(255, 255, 255); color: rgb(19, 102, 255);">
                                <a href="{{ route('social.auth', ['provider' => 'twitter']) }}" class="btn btn-twitter">Connect to <strong>Twitter</strong></a>
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body" style="background-color: rgb(255, 255, 255); color: rgb(19, 102, 255);">
                                <a href="{{ route('social.auth', ['provider' => 'google']) }}" class="btn btn-google">Connect to <strong>Google</strong></a>
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body" style="background-color: rgb(255, 255, 255); color: rgb(19, 102, 255);">
                                <a href="{{ route('social.auth', ['provider' => 'facebook']) }}" class="btn btn-facebook">Connect to <strong>Facebook</strong></a>
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body" style="background-color: rgb(255, 255, 255); color: rgb(19, 102, 255);">
                                <a href="{{ route('social.auth', ['provider' => 'instagram']) }}" class="btn btn-instagram">Connect to <strong>Instagram</strong></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-right mt-3">
                <button type="submit" class="btn btn-primary">Save changes</button>&nbsp;
                <button type="button" class="btn btn-default cancel-btn">Cancel</button>
            </div>
        </div>
    </form>
</div>
@endsection

@section('styles')
<link rel="stylesheet" href="{{ asset('admin/css/custom.css') }}">
@endsection
