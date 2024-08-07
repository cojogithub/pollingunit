<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use Notifiable, HasFactory;

    protected $fillable = [
        'firstname', 'lastname', 'email', 'phone', 'bio', 'profile_image',
        'state_id', 'senatorial_district_id', 'federal_constituency_id', 'lga_id', 'ward_id',
        'polling_unit_id', 'voter_id', 'dob', 'nin_bvn', 'password', 'jobposition',
        'company', 'twitter', 'facebook', 'linkedin', 'instagram',
        'email_verified_at', 'last_name_changed', 'gender', 'address'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'dob' => 'date',
    ];

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function senatorialDistrict()
    {
        return $this->belongsTo(SenatorialDistrict::class);
    }

    public function federalConstituency()
    {
        return $this->belongsTo(FederalConstituency::class);
    }

    public function lga()
    {
        return $this->belongsTo(LGA::class);
    }

    public function ward()
    {
        return $this->belongsTo(Ward::class);
    }

    public function pollingUnit()
    {
        return $this->belongsTo(PollingUnit::class);
    }

    public function friends()
    {
        return $this->belongsToMany(User::class, 'friends', 'user_id', 'friend_id');
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function receivedMessages()
    {
        return $this->hasMany(Message::class, 'receiver_id');
    }

    public function sentMessages()
    {
        return $this->hasMany(Message::class, 'sender_id');
    }
}
