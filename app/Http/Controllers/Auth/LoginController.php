<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use App\Models\State;
use App\Models\User;
use App\Models\Password;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/dashboard';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        $states = State::pluck('name', 'id');
        return view('login', compact('states'));
    }

    protected function attemptLogin(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if ($user) {
            $passwordEntry = Password::where('user_id', $user->id)->first();
            if ($passwordEntry && Hash::check($request->password, $passwordEntry->password)) {
                $this->guard()->login($user, $request->filled('remember'));
                return true;
            }
        }

        return false;
    }

    protected function authenticated(Request $request, $user)
    {
        Log::info('User logged in', ['user' => $user]);
    }

    protected function loggedOut(Request $request)
    {
        Log::info('User logged out', ['user' => $request->user()]);
        return redirect('/landing');
    }
}
