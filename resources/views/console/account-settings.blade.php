@extends('layouts.app')

@section('content')
<div class="container light-style flex-grow-1 container-p-y">
    <h4 class="font-weight-bold py-3 mb-4">
        Account settings
    </h4>
    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card overflow-hidden" style="background-color: transparent; border: none;">
            <div class="row no-gutters row-bordered row-border-light">
                <div class="col-md-3 pt-0">
                    <div class="list-group list-group-flush account-settings-links">
                        <a class="list-group-item list-group-item-action active" data-toggle="list" href="#account-general">General</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-change-password">Change password</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-info">Info</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-social-links">Social links</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-connections">Connections</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-notifications">Notifications</a>
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
                                    <input type="text" class="form-control mb-1" name="phone" value="{{ $user->phone }}">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Bio</label>
                                    <textarea class="form-control" name="bio" rows="5">{{ $user->bio }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Birthday</label>
                                    <input type="date" class="form-control" name="birthday" value="{{ $user->birthday }}">
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
                            <div class="card-body pb-2" style="background-color: transparent; color: white;">
                                <div class="form-group">
                                    <label class="form-label">Bio</label>
                                    <textarea class="form-control" rows="5" name="bio">{{ $user->bio }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Birthday</label>
                                    <input type="date" class="form-control" name="birthday" value="{{ $user->birthday }}">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Phone</label>
                                    <input type="text" class="form-control" name="phone" value="{{ $user->phone }}">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-social-links">
                            <div class="card-body pb-2" style="background-color: transparent; color: white;">
                                <div class="form-group">
                                    <label class="form-label">Twitter</label>
                                    <input type="text" class="form-control" name="twitter" value="{{ $user->twitter }}">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Facebook</label>
                                    <input type="text" class="form-control" name="facebook" value="{{ $user->facebook }}">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Google+</label>
                                    <input type="text" class="form-control" name="google_plus" value="{{ $user->google_plus }}">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">LinkedIn</label>
                                    <input type="text" class="form-control" name="linkedin" value="{{ $user->linkedin }}">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Instagram</label>
                                    <input type="text" class="form-control" name="instagram" value="{{ $user->instagram }}">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-connections">
                            <div class="card-body" style="background-color: transparent; color: white;">
                                <a href="{{ route('social.auth', ['provider' => 'twitter']) }}" class="btn btn-twitter">Connect to <strong>Twitter</strong></a>
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body" style="background-color: transparent; color: white;">
                                <a href="{{ route('social.auth', ['provider' => 'google']) }}" class="btn btn-google">Connect to <strong>Google</strong></a>
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body" style="background-color: transparent; color: white;">
                                <a href="{{ route('social.auth', ['provider' => 'facebook']) }}" class="btn btn-facebook">Connect to <strong>Facebook</strong></a>
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body" style="background-color: transparent; color: white;">
                                <a href="{{ route('social.auth', ['provider' => 'instagram']) }}" class="btn btn-instagram">Connect to <strong>Instagram</strong></a>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-notifications">
                            <div class="card-body pb-2" style="background-color: transparent; color: white;">
                                <h6 class="mb-4">Activity</h6>
                                <div class="form-group">
                                    <label class="switcher">
                                        <input type="checkbox" class="switcher-input" name="notify_comments" {{ old('notify_comments', $user->notify_comments) ? 'checked' : '' }}>
                                        <span class="switcher-indicator">
                                            <span class="switcher-yes"></span>
                                            <span class="switcher-no"></span>
                                        </span>
                                        <span class="switcher-label">Email me when someone comments on my article</span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="switcher">
                                        <input type="checkbox" class="switcher-input" name="notify_answers" {{ old('notify_answers', $user->notify_answers) ? 'checked' : '' }}>
                                        <span class="switcher-indicator">
                                            <span class="switcher-yes"></span>
                                            <span class="switcher-no"></span>
                                        </span>
                                        <span class="switcher-label">Email me when someone answers on my forum thread</span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="switcher">
                                        <input type="checkbox" class="switcher-input" name="notify_follows" {{ old('notify_follows', $user->notify_follows) ? 'checked' : '' }}>
                                        <span class="switcher-indicator">
                                            <span class="switcher-yes"></span>
                                            <span class="switcher-no"></span>
                                        </span>
                                        <span class="switcher-label">Email me when someone follows me</span>
                                    </label>
                                </div>
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body pb-2" style="background-color: transparent; color: white;">
                                <h6 class="mb-4">Application</h6>
                                <div class="form-group">
                                    <label class="switcher">
                                        <input type="checkbox" class="switcher-input" name="notify_news" {{ old('notify_news', $user->notify_news) ? 'checked' : '' }}>
                                        <span class="switcher-indicator">
                                            <span class="switcher-yes"></span>
                                            <span class="switcher-no"></span>
                                        </span>
                                        <span class="switcher-label">News and announcements</span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="switcher">
                                        <input type="checkbox" class="switcher-input" name="notify_updates" {{ old('notify_updates', $user->notify_updates) ? 'checked' : '' }}>
                                        <span class="switcher-indicator">
                                            <span class="switcher-yes"></span>
                                            <span class="switcher-no"></span>
                                        </span>
                                        <span class="switcher-label">Weekly product updates</span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="switcher">
                                        <input type="checkbox" class="switcher-input" name="notify_digest" {{ old('notify_digest', $user->notify_digest) ? 'checked' : '' }}>
                                        <span class="switcher-indicator">
                                            <span class="switcher-yes"></span>
                                            <span class="switcher-no"></span>
                                        </span>
                                        <span class="switcher-label">Weekly blog digest</span>
                                    </label>
                                </div>
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
