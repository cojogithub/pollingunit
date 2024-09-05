@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="text" name="firstname" value="{{ old('firstname', auth()->user()->firstname) }}" required>
        <input type="text" name="lastname" value="{{ old('lastname', auth()->user()->lastname) }}" required>
        <input type="email" name="email" value="{{ old('email', auth()->user()->email) }}" required>
        <input type="text" name="state" value="{{ old('state', auth()->user()->state) }}" required>
        <input type="text" name="senatorial_district" value="{{ old('senatorial_district', auth()->user()->senatorial_district) }}" required>
        <input type="text" name="federal_constituency" value="{{ old('federal_constituency', auth()->user()->federal_constituency) }}" required>
        <input type="text" name="lga" value="{{ old('lga', auth()->user()->lga) }}" required>
        <input type="text" name="ward" value="{{ old('ward', auth()->user()->ward) }}" required>
        <input type="text" name="polling_unit" value="{{ old('polling_unit', auth()->user()->polling_unit) }}" required>
        <input type="text" name="phone" value="{{ old('phone', auth()->user()->phone) }}" required>
        <input type="text" name="voter_id" value="{{ old('voter_id', auth()->user()->voter_id) }}" required>
        <input type="date" name="dob" value="{{ old('dob', auth()->user()->dob) }}" required>
        <input type="text" name="nin_bvn" value="{{ old('nin_bvn', auth()->user()->nin_bvn) }}" required>
        <input type="file" name="profile_image">
        <textarea name="bio">{{ old('bio', auth()->user()->bio) }}</textarea>
        <input type="text" name="jobposition" value="{{ old('jobposition', auth()->user()->jobposition) }}">
        <input type="text" name="company" value="{{ old('company', auth()->user()->company) }}">
        <input type="text" name="twitter" value="{{ old('twitter', auth()->user()->twitter) }}">
        <input type="text" name="facebook" value="{{ old('facebook', auth()->user()->facebook) }}">
        <input type="text" name="linkedin" value="{{ old('linkedin', auth()->user()->linkedin) }}">
        <input type="text" name="instagram" value="{{ old('instagram', auth()->user()->instagram) }}">
        <button type="submit">Update Profile</button>
    </form>
@endsection
