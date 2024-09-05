<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SenatorialDistrict extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'state_id'];

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function federalConstituencies()
    {
        return $this->hasMany(FederalConstituency::class);
    }
}
