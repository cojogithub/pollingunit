<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PollingUnitData extends Model
{
    use HasFactory;

    protected $fillable = [
        'registered_voters',
        'accredited_voters',
        'void_votes',
        'election_result',
    ];
}
