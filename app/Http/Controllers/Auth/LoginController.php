<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;

    function authenticated(Request $request, $user)
    {
        if (Auth::user()->role === '1') {
            return redirect('/admin/dashboard')->with('message', 'Welcome to Dasboard');
        } else {
            return redirect('/')->with('message', 'Login Success');
        }
    }

    // public function redirectToGoogle()
    // {
    //     return Socialite::driver('google')->redirect();
    // }
    // public function handleGoogleCallback()
    // {
    //     $user = Socialite::driver('google')->user();
    //     $this->_registerOrLogin($user);
    //     return redirect('/home');
    // }
    // public function redirectToFacebook()
    // {
    //     return Socialite::driver('facebook')->redirect();
    // }
    // public function handleFacebookCallback()
    // {
    //     $user = Socialite::driver('facebook')->user();
    //     $this->_registerOrLogin($user);
    //     return redirect('/home');
    // }
    // protected function _registerOrLogin($data)
    // {
    //     $user = User::where('email', '=', $data->email)->first();
    //     if (!$user) {
    //         $user = new User();
    //         $user->name = $data->name;
    //         $user->email = $data->email;
    //         $user->password = bcrypt('12345678');
    //         $user->role = 0;
    //         $user->provider_id = $data->provider_id;
    //         $user->avatar = $data->avatar;
    //         $user->save();
    //     }
    //     Auth::login($user);
    // }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
