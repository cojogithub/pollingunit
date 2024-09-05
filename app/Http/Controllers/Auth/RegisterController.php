<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\State;
use App\Models\SenatorialDistrict;
use App\Models\FederalConstituency;
use App\Models\Lga;
use App\Models\Ward;
use App\Models\PollingUnit;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = '/dashboard';

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'dob' => ['required', 'date'],
            'address' => ['required', 'string', 'max:255'],
            'state_id' => ['required', 'exists:states,id'],
            'senatorial_district_id' => ['required', 'exists:senatorial_districts,id'],
            'federal_constituency_id' => ['required', 'exists:federal_constituencies,id'],
            'lga_id' => ['required', 'exists:lgas,id'],
            'ward_id' => ['required', 'exists:wards,id'],
            'polling_unit_id' => ['required', 'exists:polling_units,id'],
            'photo' => ['nullable', 'image'],
            'voter_id' => ['nullable', 'string', 'max:255'],
            'nin_bvn' => ['nullable', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function create(array $data)
    {
        $user = User::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'gender' => $data['gender'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'dob' => $data['dob'],
            'address' => $data['address'],
            'state_id' => $data['state_id'],
            'senatorial_district_id' => $data['senatorial_district_id'],
            'federal_constituency_id' => $data['federal_constituency_id'],
            'lga_id' => $data['lga_id'],
            'ward_id' => $data['ward_id'],
            'polling_unit_id' => $data['polling_unit_id'],
            'voter_id' => $data['voter_id'] ?? null,
            'nin_bvn' => $data['nin_bvn'] ?? null,
            'password' => Hash::make($data['password']),
        ]);

        if (isset($data['photo'])) {
            $path = $data['photo']->store('id_photos', 'public');
            $user->update(['profile_image' => $path]);
        }

        return $user;
    }

    public function showRegistrationForm()
    {
        $states = State::pluck('name', 'id');
        return view('form', compact('states'));
    }

    public function getSenatorialDistricts($stateId)
    {
        $senatorialDistricts = SenatorialDistrict::where('state_id', $stateId)->pluck('name', 'id');
        return response()->json($senatorialDistricts);
    }

    public function getFederalConstituencies($districtId)
    {
        $federalConstituencies = FederalConstituency::where('senatorial_district_id', $districtId)->pluck('name', 'id');
        return response()->json($federalConstituencies);
    }

    public function getLgas($constituencyId)
    {
        $lgas = Lga::where('federal_constituency_id', $constituencyId)->pluck('name', 'id');
        return response()->json($lgas);
    }

    public function getWards($lgaId)
    {
        $wards = Ward::where('lga_id', $lgaId)->pluck('name', 'id');
        return response()->json($wards);
    }

    public function getPollingUnits($wardId)
    {
        $pollingUnits = PollingUnit::where('ward_id', $wardId)->pluck('name', 'id');
        return response()->json($pollingUnits);
    }
}


