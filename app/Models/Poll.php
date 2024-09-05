<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str; // Import the Str class

class Poll extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'question'];

    public function options()
    {
        return $this->hasMany(PollOption::class);
    }

    /**
     * Generate a filename for the poll based on its title and ID.
     *
     * @return string
     */
    public function getGeneratedFileName()
    {
        return 'poll_' . $this->id . '_' . Str::slug($this->title) . '.pdf'; // or any other extension
    }
}
