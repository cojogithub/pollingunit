<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\State;
use App\Models\SenatorialDistrict;
use App\Models\FederalConstituency;
use App\Models\LGA;
use App\Models\Ward;
use App\Models\PollingUnit;

class UserSeeder extends Seeder
{
    public function run()
    {
        $state = State::firstOrCreate(['name' => 'Abia']);
        $senatorialDistrict = SenatorialDistrict::firstOrCreate(['name' => 'Abia Central']);
        $federalConstituency = FederalConstituency::firstOrCreate(['name' => 'Gire 1/Yola North/Yola South']);
        $lga = LGA::firstOrCreate(['name' => 'Gire 1']);
        $ward = Ward::firstOrCreate(['name' => 'Dakri']);
        $pollingUnit = PollingUnit::firstOrCreate(['name' => 'PRI SCH GATTA']);

        $user = new User();
        $user->firstname = 'Asouzu';
        $user->lastname = 'Nwagwu';
        $user->gender = 'male';
        $user->email = 'asuzulu3@gmail.com';
        $user->phone = '2405056225';
        $user->bio = 'This is a bio.';
        $user->dob = '1980-01-01';
        $user->address = '123 Main St';
        $user->state()->associate($state);
        $user->senatorialDistrict()->associate($senatorialDistrict);
        $user->federalConstituency()->associate($federalConstituency);
        $user->lga()->associate($lga);
        $user->ward()->associate($ward);
        $user->pollingUnit()->associate($pollingUnit);
        $user->voter_id = 'VOTER123';
        $user->nin_bvn = 'NIN123456';
        $user->password = Hash::make('password');
        $user->jobposition = 'Developer';
        $user->company = 'Example Company';
        $user->twitter = '@asuzuthezulu';
        $user->facebook = 'https://www.facebook.com/AsuzuDaZulu/';
        $user->linkedin = 'johndoe';
        $user->instagram = 'https://www.instagram.com/asuzuthezulu/';
        $user->email_verified_at = now();
        $user->remember_token = Str::random(10);
        $user->save();
    }
}
