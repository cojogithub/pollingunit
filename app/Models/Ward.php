<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    use HasFactory;

    public function lga()
    {
        return $this->belongsTo(Lga::class);
    }

    public function pollingUnits()
    {
        return $this->hasMany(PollingUnit::class);
    }
}
