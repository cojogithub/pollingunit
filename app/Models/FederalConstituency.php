<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FederalConstituency extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'senatorial_district_id'];

    // Define the relationship with the SenatorialDistrict model
    public function senatorialDistrict()
    {
        return $this->belongsTo(SenatorialDistrict::class);
    }

    // Define the relationship with the Lga model
    public function lgas()
    {
        return $this->hasMany(Lga::class);
    }
}
