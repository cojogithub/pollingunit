<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormSubmission extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', // Assuming there's a user_id foreign key
        'firstname',
        'lastname',
        'idnumber',
        'phone',
        'dob',
        'email',
        'gender',
        'address',
        'address2',
        'position',
        'confirmation',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
