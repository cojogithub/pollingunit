<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lga extends Model
{
    use HasFactory;

    public function federalConstituency()
    {
        return $this->belongsTo(FederalConstituency::class);
    }

    public function wards()
    {
        return $this->hasMany(Ward::class);
    }
}
