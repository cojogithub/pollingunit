<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Password;

class UserSeeder extends Seeder
{
    public function run()
    {
        $user = User::create([
            'firstname' => 'John',
            'lastname' => 'Doe',
            'email' => 'johndoe@example.com',
            'phone' => '1234567890',
            'bio' => 'This is a bio.',
            'birthday' => '1980-01-01',
            'twitter' => 'johndoe',
            'facebook' => 'johndoe',
            'google_plus' => 'johndoe',
            'linkedin' => 'johndoe',
            'instagram' => 'johndoe',
            'company' => 'Example Company',
        ]);

        Password::create([
            'user_id' => $user->id,
            'firstname' => 'John',
            'lastname' => 'Doe',
            'email' => 'johndoe@example.com',
            'password' => Hash::make('password'), // Ensure bcrypt is used here
        ]);
    }
}
