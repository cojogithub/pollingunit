<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\State;
use App\Models\SenatorialDistrict;

class SenatorialDistrictSeeder extends Seeder
{
    public function run()
    {
        $statesWithDistricts = [
            'Abia' => ['Abia Central', 'Abia North', 'Abia South'],
            'Adamawa' => ['Adamawa Central', 'Adamawa North', 'Adamawa South'],
            'Akwa Ibom' => ['Akwa Ibom North-East', 'Akwa Ibom North-West', 'Akwa Ibom South'],
            'Anambra' => ['Anambra Central', 'Anambra North', 'Anambra South'],
            'Bauchi' => ['Bauchi Central', 'Bauchi North', 'Bauchi South'],
            'Bayelsa' => ['Bayelsa Central', 'Bayelsa East', 'Bayelsa West'],
            'Benue' => ['Benue North-East', 'Benue North-West', 'Benue South'],
            'Borno' => ['Borno Central', 'Borno North', 'Borno South'],
            'Cross River' => ['Cross River Central', 'Cross River North', 'Cross River South'],
            'Delta' => ['Delta Central', 'Delta North', 'Delta South'],
            'Ebonyi' => ['Ebonyi Central', 'Ebonyi North', 'Ebonyi South'],
            'Edo' => ['Edo Central', 'Edo North', 'Edo South'],
            'Ekiti' => ['Ekiti Central', 'Ekiti North', 'Ekiti South'],
            'Enugu' => ['Enugu East', 'Enugu North', 'Enugu West'],
            'Gombe' => ['Gombe Central', 'Gombe North', 'Gombe South'],
            'Imo' => ['Imo East', 'Imo North', 'Imo West'],
            'Jigawa' => ['Jigawa Central', 'Jigawa North-East', 'Jigawa North-West'],
            'Kaduna' => ['Kaduna Central', 'Kaduna North', 'Kaduna South'],
            'Kano' => ['Kano Central', 'Kano North', 'Kano South'],
            'Katsina' => ['Katsina Central', 'Katsina North', 'Katsina South'],
            'Kebbi' => ['Kebbi Central', 'Kebbi North', 'Kebbi South'],
            'Kogi' => ['Kogi Central', 'Kogi East', 'Kogi West'],
            'Kwara' => ['Kwara Central', 'Kwara North', 'Kwara South'],
            'Lagos' => ['Lagos Central', 'Lagos East', 'Lagos West'],
            'Nasarawa' => ['Nasarawa North', 'Nasarawa South', 'Nasarawa West'],
            'Niger' => ['Niger East', 'Niger North', 'Niger South'],
            'Ogun' => ['Ogun Central', 'Ogun East', 'Ogun West'],
            'Ondo' => ['Ondo Central', 'Ondo North', 'Ondo South'],
            'Osun' => ['Osun Central', 'Osun East', 'Osun West'],
            'Oyo' => ['Oyo Central', 'Oyo North', 'Oyo South'],
            'Plateau' => ['Plateau Central', 'Plateau North', 'Plateau South'],
            'Rivers' => ['Rivers East', 'Rivers South-East', 'Rivers West'],
            'Sokoto' => ['Sokoto East', 'Sokoto North', 'Sokoto South'],
            'Taraba' => ['Taraba Central', 'Taraba North', 'Taraba South'],
            'Yobe' => ['Yobe East', 'Yobe North', 'Yobe South'],
            'Zamfara' => ['Zamfara Central', 'Zamfara North', 'Zamfara West'],
            'FCT' => ['FCT']
        ];

        foreach ($statesWithDistricts as $stateName => $districts) {
            $state = State::where('name', $stateName)->first();
            if ($state) {
                foreach ($districts as $district) {
                    SenatorialDistrict::firstOrCreate([
                        'name' => $district,
                        'state_id' => $state->id
                    ]);
                }
            }
        }
    }
}
?>
